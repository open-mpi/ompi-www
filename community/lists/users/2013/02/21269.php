<?
$subject_val = "Re: [OMPI users] configure: error: Could not run a simple Fortran 77 program. Aborting.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 11:08:32 2013" -->
<!-- isoreceived="20130201160832" -->
<!-- sent="Fri, 1 Feb 2013 21:08:28 +0500" -->
<!-- isosent="20130201160828" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure: error: Could not run a simple Fortran 77 program. Aborting." -->
<!-- id="6086_1359734912_r11G8TrO017985_CAMvdAsKNJxnAuRH=DbEhJ_9mFinD8aSAHZU9kH4S95h8zO0SUQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CC1314_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-01 11:08:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21270.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran 77	program. Aborting."</a>
<li><strong>Previous message:</strong> <a href="21268.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran 77	program. Aborting."</a>
<li><strong>In reply to:</strong> <a href="21268.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran 77	program. Aborting."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21270.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran 77	program. Aborting."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff
<br>
<p>Thanks for reply. You are always very helpful.
<br>
<p>Please note that openmpi version is 1.6.3
<br>
Rest log files are attatched,
<br>
On Fri, Feb 1, 2013 at 4:51 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; configure is not finding a working Fortran compiler.  Please send all the
</span><br>
<span class="quotelev1">&gt; information listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
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
*****************************************************************************
**                                                                         **
** WARNING:  This email contains an attachment of a very suspicious type.  **
** You are urged NOT to open this attachment unless you are absolutely     **
** sure it is legitimate.  Opening this attachment may cause irreparable   **
** damage to your computer and your files.  If you have any questions      **
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
**                                                                         **
** This warning was added by the IU Computer Science Dept. mail scanner.   **
*****************************************************************************
</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-21269/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/zip attachment: <a href="../../att-21269/ompi-output.zip">ompi-output.zip</a>
</ul>
<!-- attachment="ompi-output.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21270.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran 77	program. Aborting."</a>
<li><strong>Previous message:</strong> <a href="21268.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran 77	program. Aborting."</a>
<li><strong>In reply to:</strong> <a href="21268.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran 77	program. Aborting."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21270.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran 77	program. Aborting."</a>
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
