
# main.tf - Simulación económica de DocuCode-AI

variable "costo_servidor_mensual" {
  default = 20
}

variable "costo_openai_mensual" {
  default = 20
}

variable "costo_dominio_anual" {
  default = 12
}

variable "costo_ssl" {
  default = 0
}

locals {
  costo_total_mensual = var.costo_servidor_mensual + var.costo_openai_mensual
  costo_total_anual = local.costo_total_mensual * 12 + var.costo_dominio_anual + var.costo_ssl
}

output "Costo mensual total (S/.)" {
  value = local.costo_total_mensual
}

output "Costo anual total (S/.)" {
  value = local.costo_total_anual
}
