<?
$subject_val = "Re: [OMPI users] configure: error: Could not run a simple Fortran 77 program. Aborting.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 22:27:30 2013" -->
<!-- isoreceived="20130207032730" -->
<!-- sent="Thu, 7 Feb 2013 08:27:25 +0500" -->
<!-- isosent="20130207032725" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure: error: Could not run a simple Fortran 77 program. Aborting." -->
<!-- id="CAMvdAsKLv4H5WdOyJe5RhenvKKU-BCduNJaj2SkSuipQkbNeDA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CC20EC_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure: error: Could not run a simple Fortran 77 program. Aborting.<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-06 22:27:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21323.php">Siegmar Gross: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Previous message:</strong> <a href="21321.php">Eugene Loh: "[OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>In reply to:</strong> <a href="21281.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran 77	program. Aborting."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff Actually libgfortran.so.3 was not present. I reinstalled
<br>
gfortran with multilib support
<br>
<p><p><p>On Fri, Feb 1, 2013 at 10:38 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; What is happening is that configure is trying to compile and run a fortran
</span><br>
<span class="quotelev1">&gt; test with gfortran and it is failing because it can't find
</span><br>
<span class="quotelev1">&gt; libgfortran.so.3.  Here's the relevant lines from config.log:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; configure:28735: gfortran -o conftest   conftest.f  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:28735: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:28735: ./conftest
</span><br>
<span class="quotelev1">&gt; ./conftest: error while loading shared libraries: libgfortran.so.3: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; configure:28735: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: program exited with status 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; |       program main
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |       end
</span><br>
<span class="quotelev1">&gt; configure:28751: result: no
</span><br>
<span class="quotelev1">&gt; configure:28765: error: Could not run a simple Fortran 77 program.
</span><br>
<span class="quotelev1">&gt;  Aborting.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps you need to set your LD_LIBRARY_PATH to point to where libgfortran
</span><br>
<span class="quotelev1">&gt; is located?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In short: when you can run gfortran manually to compile/run trivial
</span><br>
<span class="quotelev1">&gt; fortran programs, then configure will succeed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 1, 2013, at 5:58 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am getting following error while bulding openmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** Fortran 90/95 compiler
</span><br>
<span class="quotelev2">&gt; &gt; checking whether we are using the GNU Fortran compiler... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking whether gfortran accepts -g... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking if Fortran 77 compiler works... no
</span><br>
<span class="quotelev2">&gt; &gt; **********************************************************************
</span><br>
<span class="quotelev2">&gt; &gt; * It appears that your Fortran 77 compiler is unable to produce working
</span><br>
<span class="quotelev2">&gt; &gt; * executables.  A simple test application failed to properly
</span><br>
<span class="quotelev2">&gt; &gt; * execute.  Note that this is likely not a problem with Open MPI,
</span><br>
<span class="quotelev2">&gt; &gt; * but a problem with the local compiler installation.  More
</span><br>
<span class="quotelev2">&gt; &gt; * information (including exactly what command was given to the
</span><br>
<span class="quotelev2">&gt; &gt; * compiler and what error resulted when the command was executed) is
</span><br>
<span class="quotelev2">&gt; &gt; * available in the config.log file in this directory.
</span><br>
<span class="quotelev2">&gt; &gt; **********************************************************************
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: Could not run a simple Fortran 77 program.  Aborting.
</span><br>
<span class="quotelev2">&gt; &gt; make: *** No targets specified and no makefile found.  Stop.
</span><br>
<span class="quotelev2">&gt; &gt; make: *** No rule to make target `install'.  Stop.
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_pmd openmpi-1.6.3]#
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; System has gfortran installed
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Syed Ahsan Ali Bokhari
Electronic Engineer (EE)
Research &amp; Development Division
Pakistan Meteorological Department H-8/4, Islamabad.
Phone # off  +92518358714
Cell # +923155145014
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21322/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21323.php">Siegmar Gross: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Previous message:</strong> <a href="21321.php">Eugene Loh: "[OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>In reply to:</strong> <a href="21281.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran 77	program. Aborting."</a>
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
