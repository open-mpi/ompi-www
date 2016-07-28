Index: ompi/mpi/man/man3/MPI_Comm_delete_attr.3in
===================================================================
--- ompi/mpi/man/man3/MPI_Comm_delete_attr.3in	(revision 25723)
+++ ompi/mpi/man/man3/MPI_Comm_delete_attr.3in	(working copy)
@@ -15,7 +15,7 @@
 .SH Fortran Syntax
 .nf
 INCLUDE 'mpif.h'
-MPI_Comm_delete_attr(\fICOMM, COMM_KEYVAL, IERROR\fP)
+MPI_COMM_DELETE_ATTR(\fICOMM, COMM_KEYVAL, IERROR\fP)
 	INTEGER	\fICOMM, COMM_KEYVAL, IERROR \fP
 
 .fi
Index: ompi/mpi/man/man3/MPI_Init_thread.3in
===================================================================
--- ompi/mpi/man/man3/MPI_Init_thread.3in	(revision 25723)
+++ ompi/mpi/man/man3/MPI_Init_thread.3in	(working copy)
@@ -20,7 +20,7 @@
 .SH Fortran Syntax
 .nf
 INCLUDE 'mpif.h'
-MPI_INIT(\fIREQUIRED, PROVIDED, IERROR\fP)
+MPI_INIT_THREAD(\fIREQUIRED, PROVIDED, IERROR\fP)
 	INTEGER	\fIREQUIRED, PROVIDED, IERROR\fP 
 
 .fi
Index: ompi/mpi/man/man3/MPI_Comm_split.3in
===================================================================
--- ompi/mpi/man/man3/MPI_Comm_split.3in	(revision 25723)
+++ ompi/mpi/man/man3/MPI_Comm_split.3in	(working copy)
@@ -54,7 +54,7 @@
 .ft R
 This function partitions the group associated with comm into disjoint subgroups, one for each value of color. Each subgroup contains all processes of the same color. Within each subgroup, the processes are ranked in the order defined by the value of the argument key, with ties broken according to their rank in the old group. A new communicator is created for each subgroup and returned in newcomm. A process may supply the color value MPI_UNDEFINED, in which case newcomm returns MPI_COMM_NULL. This is a collective call, but each process is permitted to provide different values for color and key. 
 .sp
-When you call MPI_Comm_split on an inter-communicator, the processes on the left with the same color as those on the right combine to create a new inter-communicator.  The key argument describes the relative rank of processes on each side of the inter-communicator.  The function returns MPI_COMM_NULL for  those colors that are specified on only one side of the inter-communicator, or for those that specify MPI_UNEDEFINED as the color.  
+When you call MPI_Comm_split on an inter-communicator, the processes on the left with the same color as those on the right combine to create a new inter-communicator.  The key argument describes the relative rank of processes on each side of the inter-communicator.  The function returns MPI_COMM_NULL for  those colors that are specified on only one side of the inter-communicator, or for those that specify MPI_UNDEFINED as the color.  
 .sp
 A call to MPI_Comm_create(\fIcomm\fP, \fIgroup\fP, \fInewcomm\fP) is equivalent to a call to MPI_Comm_split(\fIcomm\fP, \fIcolor\fP,\fI key\fP, \fInewcomm\fP), where all members of \fIgroup\fP provide \fIcolor\fP = 0 and \fIkey\fP = rank in group, and all processes that are not members of \fIgroup\fP provide \fIcolor\fP = MPI_UNDEFINED. The function MPI_Comm_split allows more general partitioning of a group into one or more subgroups with optional reordering. 
 .sp
Index: ompi/mpi/man/man3/MPI_Comm_free_keyval.3in
===================================================================
--- ompi/mpi/man/man3/MPI_Comm_free_keyval.3in	(revision 25723)
+++ ompi/mpi/man/man3/MPI_Comm_free_keyval.3in	(working copy)
@@ -39,7 +39,7 @@
 
 .SH DESCRIPTION
 .ft R
-MPI_Comm_free_keyval frees an extant attribute key. This function sets the value of \fIkeyval\fP to  MPI_KEYVAL_INVALID. Note that it is not erroneous to free an attribute key that is in use, because the actual free does not transpire until after all references (in other communicators on the process) to the key have been freed. These references need to be explictly freed by the program, either via calls to MPI_Comm_delete_attr that free one attribute instance, or by calls to MPI_Comm_free that free all attribute instances associated with the freed communicator. 
+MPI_Comm_free_keyval frees an extant attribute key. This function sets the value of \fIkeyval\fP to  MPI_KEYVAL_INVALID. Note that it is not erroneous to free an attribute key that is in use, because the actual free does not transpire until after all references (in other communicators on the process) to the key have been freed. These references need to be explicitly freed by the program, either via calls to MPI_Comm_delete_attr that free one attribute instance, or by calls to MPI_Comm_free that free all attribute instances associated with the freed communicator. 
 .sp
 This call is identical to the call MPI_Keyval_free but is needed to match the  communicator-specific creation function introduced in the MPI-2 standard. The use of MPI_Keyval_free is deprecated. 
 
Index: ompi/mpi/man/man3/MPI_Scan.3in
===================================================================
--- ompi/mpi/man/man3/MPI_Scan.3in	(revision 25723)
+++ ompi/mpi/man/man3/MPI_Scan.3in	(working copy)
@@ -166,7 +166,7 @@
 .fi
 
 .SH USE OF IN-PLACE OPTION
-WHen the communicator is an intracommunicator, you can perform a scanning operation in place (the output buffer is used as the input buffer).  Use the variable MPI_IN_PLACE as the value of the \fIsendbuf\fR argument.  The input data is taken from the receive buffer and replaced by the output data.  
+When the communicator is an intracommunicator, you can perform a scanning operation in place (the output buffer is used as the input buffer).  Use the variable MPI_IN_PLACE as the value of the \fIsendbuf\fR argument.  The input data is taken from the receive buffer and replaced by the output data.  
 
 .SH NOTES ON COLLECTIVE OPERATIONS
 .ft R
Index: ompi/mpi/man/man3/MPI_Keyval_free.3in
===================================================================
--- ompi/mpi/man/man3/MPI_Keyval_free.3in	(revision 25723)
+++ ompi/mpi/man/man3/MPI_Keyval_free.3in	(working copy)
@@ -38,7 +38,7 @@
 .sp
 This deprecated routine is not available in C++. 
 .sp
-Frees an extant attribute key. This function sets the value of keyval to  MPI_KEYVAL_INVALID. Note that it is not erroneous to free an attribute key that is in use, because the actual free does not transpire until after all references (in other communicators on the process) to the key have been freed. These references need to be explictly freed by the program, either via calls to MPI_Attr_delete that free one attribute instance, or by calls to MPI_Comm_free that free all attribute instances associated with the freed communicator. 
+Frees an extant attribute key. This function sets the value of keyval to  MPI_KEYVAL_INVALID. Note that it is not erroneous to free an attribute key that is in use, because the actual free does not transpire until after all references (in other communicators on the process) to the key have been freed. These references need to be explicitly freed by the program, either via calls to MPI_Attr_delete that free one attribute instance, or by calls to MPI_Comm_free that free all attribute instances associated with the freed communicator. 
 
 .SH NOTE
 .ft R
Index: ompi/mpi/man/man3/MPI_Comm_get_attr.3in
===================================================================
--- ompi/mpi/man/man3/MPI_Comm_get_attr.3in	(revision 25723)
+++ ompi/mpi/man/man3/MPI_Comm_get_attr.3in	(working copy)
@@ -16,7 +16,7 @@
 .SH Fortran Syntax (see FORTRAN 77 NOTES)
 .nf
 INCLUDE 'mpif.h'
-MPI_COMM_GET_ATTR(\fICOMM, COMM_KEYVAL, ATTRIBUTE_VAL, IERROR\fP)
+MPI_COMM_GET_ATTR(\fICOMM, COMM_KEYVAL, ATTRIBUTE_VAL, FLAG, IERROR\fP)
 	INTEGER	\fICOMM, COMM_KEYVAL, IERROR \fP
 	INTEGER(KIND=MPI_ADDRESS_KIND) \fIATTRIBUTE_VAL\fP
 	LOGICAL \fIFLAG\fP
Index: ompi/mpi/man/man3/MPI_Type_get_envelope.3in
===================================================================
--- ompi/mpi/man/man3/MPI_Type_get_envelope.3in	(revision 25723)
+++ ompi/mpi/man/man3/MPI_Type_get_envelope.3in	(working copy)
@@ -2,7 +2,7 @@
 .\" Copyright (c) 1996 Thinking Machines Corporation
 .TH MPI_Type_get_envelope 3 "#OMPI_DATE#" "#PACKAGE_VERSION#" "#PACKAGE_NAME#"
 .SH NAME
-\fBMPI_Type_get_envelope\fP \- Returns informaion about input arguments associated with a data type. 
+\fBMPI_Type_get_envelope\fP \- Returns information about input arguments associated with a data type. 
 
 .SH SYNTAX
 .ft R
@@ -56,7 +56,7 @@
 
 .SH DESCRIPTION
 .ft R
-For the given data type, MPI_Type_get_envelope returns information on the number and type of input arguments used in teh call that created the data type. The number-of-arguments values returned can be used to provide sufficiently large arrays in the decoding routine MPI_Type_get_contents. This call and the meaning of the returned values is described below. The combiner reflects the MPI data type constructor call that was used in creating \fIdatatype\fP. 
+For the given data type, MPI_Type_get_envelope returns information on the number and type of input arguments used in the call that created the data type. The number-of-arguments values returned can be used to provide sufficiently large arrays in the decoding routine MPI_Type_get_contents. This call and the meaning of the returned values is described below. The combiner reflects the MPI data type constructor call that was used in creating \fIdatatype\fP. 
 
 .SH NOTES
 .ft R
Index: ompi/mpi/man/man3/MPI_Intercomm_create.3in
===================================================================
--- ompi/mpi/man/man3/MPI_Intercomm_create.3in	(revision 25723)
+++ ompi/mpi/man/man3/MPI_Intercomm_create.3in	(working copy)
@@ -2,7 +2,7 @@
 .\" Copyright (c) 1996 Thinking Machines Corporation
 .TH MPI_Intercomm_create 3 "#OMPI_DATE#" "#PACKAGE_VERSION#" "#PACKAGE_NAME#"
 .SH NAME
-\fBMPI_Intercomm_create\fP \- Creates an intercommuncator from two intracommunicators.
+\fBMPI_Intercomm_create\fP \- Creates an intercommunicator from two intracommunicators.
 
 .SH SYNTAX
 .ft R
@@ -70,7 +70,7 @@
 We recommend using a dedicated peer communicator, such as a duplicate of MPI_COMM_WORLD, to avoid trouble with peer communicators.
 .sp
 The MPI 1.1 Standard contains two mutually exclusive comments on the
-input intracommunicators.  One says that their repective groups must be
+input intracommunicators.  One says that their respective groups must be
 disjoint; the other that the leaders can be the same process.  After
 some discussion by the MPI Forum, it has been decided that the groups must
 be disjoint.  Note that the 
Index: ompi/mpi/man/man3/MPI_Pcontrol.3in
===================================================================
--- ompi/mpi/man/man3/MPI_Pcontrol.3in	(revision 25723)
+++ ompi/mpi/man/man3/MPI_Pcontrol.3in	(working copy)
@@ -16,7 +16,7 @@
 .nf
 INCLUDE 'mpif.h'
 MPI_PCONTROL(\fILEVEL\fP)
-	INTEGER	\fILEVEL\fP, \&...
+	INTEGER	\fILEVEL\fP
 
 .fi
 .SH C++ Syntax
Index: ompi/mpi/man/man3/MPI_Sizeof.3in
===================================================================
--- ompi/mpi/man/man3/MPI_Sizeof.3in	(revision 25723)
+++ ompi/mpi/man/man3/MPI_Sizeof.3in	(working copy)
@@ -20,7 +20,7 @@
 .ft R
 .TP 1i
 X
-A Fortran variable of numeric intrisic type (choice).
+A Fortran variable of numeric intrinsic type (choice).
 
 .SH OUTPUT PARAMETERS
 .ft R
Index: ompi/mpi/man/man3/MPI_Request_get_status.3in
===================================================================
--- ompi/mpi/man/man3/MPI_Request_get_status.3in	(revision 25723)
+++ ompi/mpi/man/man3/MPI_Request_get_status.3in	(working copy)
@@ -15,7 +15,7 @@
 .SH Fortran Syntax
 .nf
 INCLUDE 'mpif.h'
-MPI_REQUEST_FREE(\fIREQUEST\fP, \fIFLAG\fP, \fISTATUS\fP, \fIIERROR\fP)
+MPI_REQUEST_GET_STATUS(\fIREQUEST\fP, \fIFLAG\fP, \fISTATUS\fP, \fIIERROR\fP)
 	INTEGER	REQUEST, STATUS(MPI_STATUS_SIZE), IERROR 
 	LOGICAL	FLAG
 
Index: ompi/mpi/man/man3/MPI_Type_create_subarray.3in
===================================================================
--- ompi/mpi/man/man3/MPI_Type_create_subarray.3in	(revision 25723)
+++ ompi/mpi/man/man3/MPI_Type_create_subarray.3in	(working copy)
@@ -97,7 +97,7 @@
              {subsize , subsize , \..., subsize       },
                      0         1               ndims-1
              {start , start , \..., start       }, \fIoldtype\fP)
-                   0       1             bduns-1
+                   0       1             ndims-1
 .fi
 .sp
 Let the typemap of \fIoldtype\fP have the form:
Index: ompi/mpi/man/man3/MPI_Comm_spawn.3in
===================================================================
--- ompi/mpi/man/man3/MPI_Comm_spawn.3in	(revision 25723)
+++ ompi/mpi/man/man3/MPI_Comm_spawn.3in	(working copy)
@@ -23,7 +23,7 @@
 
 	CHARACTER*(*) \fICOMMAND, ARGV(*)\fP 
 	INTEGER	\fIINFO, MAXPROCS, ROOT, COMM, INTERCOMM, 
-	ARRAY_OF_ERRORCODES(*), IERROR\fP 
+	ARRAY_OF_ERRCODES(*), IERROR\fP 
 
 .fi
 .SH C++ Syntax