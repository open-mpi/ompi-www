Index: flatten.c
===================================================================
--- flatten.c	(revision 9836)
+++ flatten.c	(working copy)
@@ -116,7 +116,6 @@
     MPI_Type_get_contents(datatype, nints, nadds, ntypes, ints, adds, types);
 
     switch (combiner) {
-#ifdef MPIIMPL_HAVE_MPI_COMBINER_DUP
     case MPI_COMBINER_DUP:
         MPI_Type_get_envelope(types[0], &old_nints, &old_nadds,
 			      &old_ntypes, &old_combiner); 
@@ -124,8 +123,6 @@
 	if ((old_combiner != MPI_COMBINER_NAMED) && (!old_is_contig))
             ADIOI_Flatten(types[0], flat, st_offset, curr_index);
         break;
-#endif
-#ifdef MPIIMPL_HAVE_MPI_COMBINER_SUBARRAY
     case MPI_COMBINER_SUBARRAY:
         {
 	    int dims = ints[0];
@@ -142,8 +139,6 @@
 	    MPI_Type_free(&stype);
 	}
 	break;
-#endif
-#ifdef MPIIMPL_HAVE_MPI_COMBINER_DARRAY
     case MPI_COMBINER_DARRAY:
 	{
 	    int dims = ints[2];
@@ -163,7 +158,6 @@
 	    MPI_Type_free(&dtype);
 	}
 	break;
-#endif
     case MPI_COMBINER_CONTIGUOUS:
 	top_count = ints[0];
         MPI_Type_get_envelope(types[0], &old_nints, &old_nadds,
@@ -523,7 +517,6 @@
     MPI_Type_get_contents(datatype, nints, nadds, ntypes, ints, adds, types);
 
     switch (combiner) {
-#ifdef MPIIMPL_HAVE_MPI_COMBINER_DUP
     case MPI_COMBINER_DUP:
         MPI_Type_get_envelope(types[0], &old_nints, &old_nadds,
                               &old_ntypes, &old_combiner); 
@@ -535,8 +528,6 @@
 		(*curr_index)++;
 	}
         break;
-#endif
-#ifdef MPIIMPL_HAVE_MPI_COMBINER_SUBARRAY
     case MPI_COMBINER_SUBARRAY:
         {
 	    int dims = ints[0];
@@ -557,8 +548,6 @@
 
 	}
 	break;
-#endif
-#ifdef MPIIMPL_HAVE_MPI_COMBINER_DARRAY
     case MPI_COMBINER_DARRAY:
 	{
 	    int dims = ints[2];
@@ -581,7 +570,6 @@
 	    MPI_Type_free(&dtype);
 	}
 	break;
-#endif
     case MPI_COMBINER_CONTIGUOUS:
         top_count = ints[0];
         MPI_Type_get_envelope(types[0], &old_nints, &old_nadds,

