Index: opal/mca/base/mca_base_param.c
===================================================================
--- opal/mca/base/mca_base_param.c	(revision 20022)
+++ opal/mca/base/mca_base_param.c	(working copy)
@@ -93,7 +93,7 @@
  * local functions
  */
 #if defined(__WINDOWS__)
-static int read_keys_from_registry(HKEY hKey, char *sub_key, char *current_key);
+static int read_keys_from_registry(HKEY hKey, char *sub_key, char *current_name);
 #endif  /* defined(__WINDOWS__) */
 static int fixup_files(char **file_list, char * path, bool rel_path_search);
 static int read_files(char *file_list);
@@ -1077,7 +1077,7 @@
 #define MAX_KEY_LENGTH 255
 #define MAX_VALUE_NAME 16383
 
-static int read_keys_from_registry(HKEY hKey, char *sub_key, char *current_key)
+static int read_keys_from_registry(HKEY hKey, char *sub_key, char *current_name)
 {       
     TCHAR   achKey[MAX_KEY_LENGTH];        /* buffer for subkey name */
     DWORD   cbName;                        /* size of name string */
@@ -1094,8 +1094,8 @@
     LPDWORD lpType;
     LPDWORD word_lpData;
     TCHAR   str_lpData[MAX_VALUE_NAME];
-    TCHAR   *str_key_name, *tmp_key, *type;
-    DWORD   dwSize, i, retCode, type_len;
+    TCHAR   *str_key_name, *type_name, *next_name;
+    DWORD   dwSize, i, retCode, type_len, param_type;
     TCHAR achValue[MAX_VALUE_NAME];
     DWORD cchValue = MAX_VALUE_NAME;
     HKEY hTestKey; 
@@ -1120,102 +1120,75 @@
                                NULL );
 
     /* Enumerate the subkeys, until RegEnumKeyEx fails. */
-    if (cSubKeys) {
-        for (i = 0; i < cSubKeys; i++) { 
-            cbName = MAX_KEY_LENGTH;
-            retCode = RegEnumKeyEx(hTestKey, i, achKey, &cbName, NULL, NULL, NULL, NULL); 
-            if (retCode == ERROR_SUCCESS) {
-                asprintf(&sub_sub_key, "%s\\%s", sub_key, achKey);
-                if (current_key!=NULL) {
-                    asprintf(&tmp_key, "%s", current_key);
-                    asprintf(&current_key, "%s_%s", current_key, achKey);
-                } else {
-                    tmp_key = NULL;
-                    asprintf(&current_key, "%s", achKey);
-                }
-                read_keys_from_registry(hKey, sub_sub_key, current_key);
-                free(current_key);
-                if (tmp_key!=NULL) {
-                    asprintf(&current_key, "%s", tmp_key);
-                    free(tmp_key);
-                } else
-                    current_key = NULL;
-            }
+    for (i = 0; i < cSubKeys; i++) { 
+        cbName = MAX_KEY_LENGTH;
+        retCode = RegEnumKeyEx(hTestKey, i, achKey, &cbName, NULL, NULL, NULL, NULL); 
+        if (retCode != ERROR_SUCCESS) continue;
+        asprintf(&sub_sub_key, "%s\\%s", sub_key, achKey);
+        if( NULL != current_name ) {
+            asprintf(&next_name, "%s_%s", current_name, achKey);
+        } else {
+            asprintf(&next_name, "%s", achKey);
         }
-    } 
+        read_keys_from_registry(hKey, sub_sub_key, next_name);
+        free(next_name);
+        free(sub_sub_key);
+    }
     
     /* Enumerate the key values. */
-    if (cValues) {
-        for (i=0, retCode=ERROR_SUCCESS; i<cValues; i++) { 
-            cchValue = MAX_VALUE_NAME; 
-            achValue[0] = '\0'; 
-            retCode = RegEnumValue(hTestKey, i, achValue, &cchValue, NULL, NULL, NULL, NULL);
-     
-            if (retCode == ERROR_SUCCESS ) { 
-           
-                /* lpType - get the type of the value
-                 * dwSize - get the size of the buffer to hold the value
-                 */
-                retCode = RegQueryValueEx(hTestKey, achValue, NULL, (LPDWORD)&lpType, NULL, &dwSize);
+    for( i = 0; i < cValues; i++ ) { 
+        cchValue = MAX_VALUE_NAME; 
+        achValue[0] = '\0'; 
+        retCode = RegEnumValue(hTestKey, i, achValue, &cchValue, NULL, NULL, NULL, NULL);
+        if (retCode != ERROR_SUCCESS ) continue; 
+       
+        /* lpType - get the type of the value
+         * dwSize - get the size of the buffer to hold the value
+         */
+        retCode = RegQueryValueEx(hTestKey, achValue, NULL, (LPDWORD)&lpType, NULL, &dwSize);
 
-                if (strcmp(achValue,"")) {
-                    if (current_key!=NULL)
-                        asprintf(&str_key_name, "%s_%s", current_key, achValue);
-                    else
-                        asprintf(&str_key_name, "%s", achValue);
-                } else {
-                    if (current_key!=NULL)
-                        asprintf(&str_key_name, "%s", current_key);
-                    else
-                        asprintf(&str_key_name, "%s", achValue);
-                } 
-                
-                type_len = strcspn(str_key_name, "_");
-                type = (char*) malloc((type_len+1)*sizeof(char));
-                strncpy( type, str_key_name, type_len );
-                if ( type_len == strlen(str_key_name) )
-                    strcpy( str_key_name, "" );
-                else
-                    strcpy( str_key_name, str_key_name + type_len + 1 ); /* trim str_key_name by length of type + 1 for underscrore */
-                type[type_len]='\0';
-                if (lpType == (LPDWORD) REG_SZ) { /* REG_SZ = 1 */
-                    retCode = RegQueryValueEx(hTestKey, achValue, NULL, NULL, (LPBYTE)&str_lpData, &dwSize);
-                    if (!retCode) {
-                        mca_base_param_storage_t storage, override;
-                        mca_base_param_storage_t lookup;
-    
-                        storage.stringval = (char*)str_lpData;
-                        override.stringval = (char*)str_lpData;
-                        (void)param_register( type, NULL, str_key_name, "Key read from Windows registry", 
-                                              MCA_BASE_PARAM_TYPE_STRING, false, false,
-                                              &storage, NULL, &override, 
-                                              &lookup );
-                        /*printf( "%s %s = %s.\n", type, str_key_name, str_lpData);*/
-                    } else {
-                        opal_output( 0, "error reading value of param_name: %s with %d error.\n",
-                                     str_key_name, retCode);
-                    }
-                }
-                if (lpType == (LPDWORD) REG_DWORD) { /* REG_DWORD = 4 */
-                    retCode = RegQueryValueEx(hTestKey, achValue, NULL, NULL, (LPBYTE)&word_lpData, &dwSize);
-                    if (!retCode) {
-                        storage.intval  = (int)word_lpData;
-                        override.intval = (int)word_lpData;
-                        (void)param_register( type, NULL, str_key_name, "Key read from Windows registry", 
-                                              MCA_BASE_PARAM_TYPE_INT, false, false,
-                                              &storage, NULL, &override, 
-                                              &lookup );
-                        /*printf( "%s %s = %d.\n", type, str_key_name, (int)word_lpData);*/
-                    } else {
-                        opal_output( 0, "error reading value of param_name: %s with %d error.\n",
-                                     str_key_name, retCode );
-                    }
-                }
-                free(type);
-                free(str_key_name);
-            } 
+        if (strcmp(achValue,"")) {
+            if (current_name!=NULL)
+                asprintf(&type_name, "%s_%s", current_name, achValue);
+            else
+                asprintf(&type_name, "%s", achValue);
+        } else {
+            if (current_name!=NULL)
+                asprintf(&type_name, "%s", current_name);
+            else
+                asprintf(&type_name, "%s", achValue);
+        } 
+        
+        type_len = strcspn(type_name, "_");
+        str_key_name = type_name + type_len + 1;
+        if( type_len == strlen(type_name) )
+            str_key_name = NULL;
+        type_name[type_len] = '\0';
+
+        retCode = 1;
+        if( lpType == (LPDWORD)REG_SZ ) { /* REG_SZ = 1 */
+            retCode = RegQueryValueEx(hTestKey, achValue, NULL, NULL, (LPBYTE)&str_lpData, &dwSize);
+            storage.stringval = (char*)str_lpData;
+            override.stringval = (char*)str_lpData;
+            param_type = MCA_BASE_PARAM_TYPE_STRING;
+        } else if( lpType == (LPDWORD)REG_DWORD ) { /* REG_DWORD = 4 */
+            retCode = RegQueryValueEx(hTestKey, achValue, NULL, NULL, (LPBYTE)&word_lpData, &dwSize);
+            storage.intval  = (int)word_lpData;
+            override.intval = (int)word_lpData;
+            param_type = MCA_BASE_PARAM_TYPE_INT;
         }
+        if( !retCode ) {
+            (void)param_register( type_name, NULL, str_key_name, NULL, 
+                                  param_type, false, false,
+                                  &storage, NULL, &override, &lookup );
+        } else {
+            opal_output( 0, "error reading value of param_name: %s with %d error.\n",
+                         str_key_name, retCode);
+        }
+        
+        free(type_name);
     }
+
     RegCloseKey( hKey );
 
     return OPAL_SUCCESS;
Index: opal/runtime/opal_cr.c
===================================================================
--- opal/runtime/opal_cr.c	(revision 20022)
+++ opal/runtime/opal_cr.c	(working copy)
@@ -321,8 +321,7 @@
 #endif
 
 #else
-    opal_output( 0, "This feature is disabled on Windows" );
-    return 0;
+    opal_cr_is_tool = true;  /* no support for CR on Windows yet */ 
 #endif  /* __WINDOWS__ */
 
     mca_base_param_reg_string_name("opal_cr", "tmp_dir",
Index: orte/mca/plm/process/plm_process_module.c
===================================================================
--- orte/mca/plm/process/plm_process_module.c	(revision 20022)
+++ orte/mca/plm/process/plm_process_module.c	(working copy)
@@ -645,9 +645,7 @@
             if (NULL != param) free(param);
         }
         {
-            char* name_string;
             char** env;
-            char* var;
 
             OPAL_OUTPUT_VERBOSE((1, orte_plm_globals.output,
                                  "%s plm:process: launching on node %s",