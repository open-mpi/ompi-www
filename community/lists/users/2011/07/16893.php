<?
$subject_val = "[OMPI users] icc erroring when trying to use a directory as a source file (Catastrophic error: cannot open source file &quot;paddress.c&quot;: is a directory )";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 03:23:47 2011" -->
<!-- isoreceived="20110712072347" -->
<!-- sent="Tue, 12 Jul 2011 04:23:22 -0300" -->
<!-- isosent="20110712072322" -->
<!-- name="Denis" -->
<!-- email="denismpa_at_[hidden]" -->
<!-- subject="[OMPI users] icc erroring when trying to use a directory as a source file (Catastrophic error: cannot open source file &amp;quot;paddress.c&amp;quot;: is a directory )" -->
<!-- id="CA+ja2MAkz=iAKNXjPz8gVVvc9X3XA2BeVr_imo3FwdgJOXb7EA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] icc erroring when trying to use a directory as a source file (Catastrophic error: cannot open source file &quot;paddress.c&quot;: is a directory )<br>
<strong>From:</strong> Denis (<em>denismpa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-12 03:23:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16894.php">Jeff Squyres: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>Previous message:</strong> <a href="16892.php">Mohan, Ashwin: "Re: [OMPI users] Error using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16895.php">Jeff Squyres: "Re: [OMPI users] icc erroring when trying to use a directory as a source file (Catastrophic error: cannot open source file &quot;paddress.c&quot;: is a directory )"</a>
<li><strong>Reply:</strong> <a href="16895.php">Jeff Squyres: "Re: [OMPI users] icc erroring when trying to use a directory as a source file (Catastrophic error: cannot open source file &quot;paddress.c&quot;: is a directory )"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, buddies, i am trying to build openmpi with icc and it s not
<br>
working. I ve tried versions 1.4.3 and 1.4.2  the error is the same
<br>
but for different source files(directories)
<br>
<p>I am using the latest icc version and have compiled same version of
<br>
openmpi with gnu before.
<br>
Is there any switch that need to be passed to icc in order to be able
<br>
to compile a directory as a source code as needed to build openmpi?
<br>
<p><p>Mac-$ icc -DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-DOMPI_PROFILING_DEFINES=1 -I../../../.. -D_REENTRANT -O3 -DNDEBUG
<br>
-finline-functions -fno-strict-aliasing -restrict -fvisibility=hidden
<br>
-MT paddress.lo -MD -MP -MF .deps/paddress.Tpo -c paddress.c
<br>
-fno-common -DPIC -o .libs/paddress.o
<br>
Catastrophic error: cannot open source file &quot;paddress.c&quot;: is a directory
<br>
<p><p>$ ls paddress.c
<br>
Makefile			comm_call_errhandler.c		file_c2f.c			file_set_atomicity.c		group_difference.c		op_create.c			status_set_elements.c		type_set_name.c
<br>
Makefile.am			comm_compare.c			file_call_errhandler.c		file_set_errhandler.c		group_excl.c			op_f2c.c			test.c				type_size.c
<br>
Makefile.in			comm_connect.c			file_close.c			file_set_info.c			group_f2c.c			op_free.c			test_cancelled.c		type_struct.c
<br>
abort.c				comm_create.c			file_create_errhandler.c	file_set_size.c			group_free.c			open_port.c			testall.c			type_ub.c
<br>
accumulate.c			comm_create_errhandler.c	file_delete.c			file_set_view.c			group_incl.c			pack.c				testany.c			type_vector.c
<br>
add_error_class.c		comm_create_keyval.c		file_f2c.c
<br>
<p><p>Thank you in advance!
<br>
Denis.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16894.php">Jeff Squyres: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>Previous message:</strong> <a href="16892.php">Mohan, Ashwin: "Re: [OMPI users] Error using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16895.php">Jeff Squyres: "Re: [OMPI users] icc erroring when trying to use a directory as a source file (Catastrophic error: cannot open source file &quot;paddress.c&quot;: is a directory )"</a>
<li><strong>Reply:</strong> <a href="16895.php">Jeff Squyres: "Re: [OMPI users] icc erroring when trying to use a directory as a source file (Catastrophic error: cannot open source file &quot;paddress.c&quot;: is a directory )"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
