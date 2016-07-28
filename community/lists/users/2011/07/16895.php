<?
$subject_val = "Re: [OMPI users] icc erroring when trying to use a directory as a source file (Catastrophic error: cannot open source file &quot;paddress.c&quot;: is a directory )";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 10:36:41 2011" -->
<!-- isoreceived="20110712143641" -->
<!-- sent="Tue, 12 Jul 2011 10:36:36 -0400" -->
<!-- isosent="20110712143636" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] icc erroring when trying to use a directory as a source file (Catastrophic error: cannot open source file &amp;quot;paddress.c&amp;quot;: is a directory )" -->
<!-- id="99F02AAE-608A-47F4-ADD9-155AB6D9BEAF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+ja2MAkz=iAKNXjPz8gVVvc9X3XA2BeVr_imo3FwdgJOXb7EA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] icc erroring when trying to use a directory as a source file (Catastrophic error: cannot open source file &quot;paddress.c&quot;: is a directory )<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-12 10:36:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16896.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16894.php">Jeff Squyres: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>In reply to:</strong> <a href="16893.php">Denis: "[OMPI users] icc erroring when trying to use a directory as a source file (Catastrophic error: cannot open source file &quot;paddress.c&quot;: is a directory )"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't quite parse your output.
<br>
<p>paddress.c should be a sym link in ompi/mpi/c/profile back to ompi/mpi/c/address.c.  I'm not sure why &quot;ls paddress.c&quot; shows a whole directory of files...?
<br>
<p>You might want to whack your OMPI source tree, re-expand the tarball, and try again.  If it still fails, please send all the output listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Jul 12, 2011, at 3:23 AM, Denis wrote:
<br>
<p><span class="quotelev1">&gt; Hello, buddies, i am trying to build openmpi with icc and it s not
</span><br>
<span class="quotelev1">&gt; working. I ve tried versions 1.4.3 and 1.4.2  the error is the same
</span><br>
<span class="quotelev1">&gt; but for different source files(directories)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using the latest icc version and have compiled same version of
</span><br>
<span class="quotelev1">&gt; openmpi with gnu before.
</span><br>
<span class="quotelev1">&gt; Is there any switch that need to be passed to icc in order to be able
</span><br>
<span class="quotelev1">&gt; to compile a directory as a source code as needed to build openmpi?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mac-$ icc -DHAVE_CONFIG_H -I. -I../../../../opal/include
</span><br>
<span class="quotelev1">&gt; -I../../../../orte/include -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
</span><br>
<span class="quotelev1">&gt; -DOMPI_PROFILING_DEFINES=1 -I../../../.. -D_REENTRANT -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict -fvisibility=hidden
</span><br>
<span class="quotelev1">&gt; -MT paddress.lo -MD -MP -MF .deps/paddress.Tpo -c paddress.c
</span><br>
<span class="quotelev1">&gt; -fno-common -DPIC -o .libs/paddress.o
</span><br>
<span class="quotelev1">&gt; Catastrophic error: cannot open source file &quot;paddress.c&quot;: is a directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ls paddress.c
</span><br>
<span class="quotelev1">&gt; Makefile			comm_call_errhandler.c		file_c2f.c			file_set_atomicity.c		group_difference.c		op_create.c			status_set_elements.c		type_set_name.c
</span><br>
<span class="quotelev1">&gt; Makefile.am			comm_compare.c			file_call_errhandler.c		file_set_errhandler.c		group_excl.c			op_f2c.c			test.c				type_size.c
</span><br>
<span class="quotelev1">&gt; Makefile.in			comm_connect.c			file_close.c			file_set_info.c			group_f2c.c			op_free.c			test_cancelled.c		type_struct.c
</span><br>
<span class="quotelev1">&gt; abort.c				comm_create.c			file_create_errhandler.c	file_set_size.c			group_free.c			open_port.c			testall.c			type_ub.c
</span><br>
<span class="quotelev1">&gt; accumulate.c			comm_create_errhandler.c	file_delete.c			file_set_view.c			group_incl.c			pack.c				testany.c			type_vector.c
</span><br>
<span class="quotelev1">&gt; add_error_class.c		comm_create_keyval.c		file_f2c.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you in advance!
</span><br>
<span class="quotelev1">&gt; Denis.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16896.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16894.php">Jeff Squyres: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>In reply to:</strong> <a href="16893.php">Denis: "[OMPI users] icc erroring when trying to use a directory as a source file (Catastrophic error: cannot open source file &quot;paddress.c&quot;: is a directory )"</a>
<!-- nextthread="start" -->
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
