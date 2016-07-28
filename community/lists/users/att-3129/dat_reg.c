/*
 * Copyright (c) 2007      Sun Microsystems, Inc.  All rights reserved.
 *
 * Desc: Simple uDAPL program to check if interface available in registry.
 *
 * % gcc dat_reg.c -o dat_reg -ldat
 * % dat_reg
 *   provider 1: ibd1
 */
#include<stdio.h>
#include <dat/udat.h>

int main() {
    DAT_PROVIDER_INFO provider_list[10];
    DAT_PROVIDER_INFO *providers = provider_list;
    DAT_COUNT entries;
    int i;

    if (dat_registry_list_providers(10, &entries, &providers) !=
        DAT_SUCCESS) {
        printf("ran into problems\n");
        exit(-1);
    }

    for(i=0; i< entries; i++) {
	printf("provider %d: %s\n", entries, provider_list[i].ia_name);
    }
}

