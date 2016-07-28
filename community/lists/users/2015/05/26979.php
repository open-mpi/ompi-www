<?
$subject_val = "Re: [OMPI users] Openmpi compilation errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 09:43:39 2015" -->
<!-- isoreceived="20150529134339" -->
<!-- sent="Fri, 29 May 2015 13:43:17 +0000" -->
<!-- isosent="20150529134317" -->
<!-- name="Bruno Queiros" -->
<!-- email="bqueiros_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi compilation errors" -->
<!-- id="CAOnd8MBF3vPqPPeqjj1rsNAR8Dp1uVEkR_C9uM+Tj0dFArDwxQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="404DEA45-73B0-4AD6-847F-74B352A8055D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi compilation errors<br>
<strong>From:</strong> Bruno Queiros (<em>bqueiros_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-29 09:43:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26980.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26978.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>In reply to:</strong> <a href="26974.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26982.php">Timothy Brown: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Jeff for the clarification and help.
<br>
<p>Em sex, 29 de mai de 2015 &#195;&#160;s 12:08, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; escreveu:
<br>
<p><span class="quotelev1">&gt; On May 29, 2015, at 6:54 AM, Bruno Queiros &lt;bqueiros_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I understand that using Portland compiler isn't &quot;advised&quot; by Open Mpi, i
</span><br>
<span class="quotelev1">&gt; was just wondering if there's a way of doing it, since i need Open Mpi
</span><br>
<span class="quotelev1">&gt; compiled with PG fortran and not gfortran for example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A further clarification: the Portland compiler is a fine compiler; we
</span><br>
<span class="quotelev1">&gt; certainly support it.  The only thing we recommend is avoiding mixing
</span><br>
<span class="quotelev1">&gt; compiler suites whenever possible (e.g., using one compiler for C and
</span><br>
<span class="quotelev1">&gt; another for Fortran).  It leads to complications like this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, it looks like you have a Portland Fortran license, and no
</span><br>
<span class="quotelev1">&gt; corresponding Portland C license, and therefore you're somewhat forced into
</span><br>
<span class="quotelev1">&gt; this situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The name of the binary is correct: pgf90 the name of the file is also
</span><br>
<span class="quotelev1">&gt; correct .pgf90.rc i do have some doubts about the content of the file. Is
</span><br>
<span class="quotelev1">&gt; this enough?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; switch -pthread is replace(-lpthread) positional(linker)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not a Portland customer -- I don't know.  You'll need to check their
</span><br>
<span class="quotelev1">&gt; documentation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; If i do a source .pgf90.rc i do get errors:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -bash: ./.pgf90.rc: line 1: syntax error near unexpected token `('
</span><br>
<span class="quotelev2">&gt; &gt; -bash: ./.pgf90.rc: line 1: `switch -pthread is replace(-lpthread)
</span><br>
<span class="quotelev1">&gt; positional(linker)'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm guessing that this file is not intended to be sourced by the shell,
</span><br>
<span class="quotelev1">&gt; but rather noticed and read/used by the pgf90 compiler when it is invoked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sidenote: isn't there a pgfortran compiler executable that is supposed to
</span><br>
<span class="quotelev1">&gt; be preferred over &quot;pgf90&quot; these days?  (remember my disclaimer: I'm not a
</span><br>
<span class="quotelev1">&gt; Portland customer, so I could be totally off base here...)  Have you tried
</span><br>
<span class="quotelev1">&gt; pgfortran to see if it accepts the -pthread option?  Sometimes the
</span><br>
<span class="quotelev1">&gt; different compiler executable entry points behave slightly differently...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Besides that i tried what you mentioned: pgf90 -pthread somefile.f90 ,
</span><br>
<span class="quotelev1">&gt; and that gives the expected error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; pgf90 -pthread helloworld.f90
</span><br>
<span class="quotelev2">&gt; &gt; pgf90-Error-Unknown switch: -pthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds like this file is somehow not yet correct, or you have a version of
</span><br>
<span class="quotelev1">&gt; the Portland compiler that does not use this config file.  You should check
</span><br>
<span class="quotelev1">&gt; the Portland Fortran compiler documentation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you can't get this Portland config file workaround to work, you can
</span><br>
<span class="quotelev1">&gt; also make your own &quot;my_fortran_compiler&quot; script that simply strips out the
</span><br>
<span class="quotelev1">&gt; -pthread argv token and then invokes pgf90 (or pgfortran) with the rest of
</span><br>
<span class="quotelev1">&gt; the argv.  Then you can:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure FC=my_fortran_compiler ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I.e., you're just intercepting Open MPI's invocation of the Fortran
</span><br>
<span class="quotelev1">&gt; compiler, removing the CLI option that pgf90(pgfortran) won't understand,
</span><br>
<span class="quotelev1">&gt; and then invoking pgf90(pgfortran).  Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; My real question is, can i change Open Mpi configuration, to not use
</span><br>
<span class="quotelev1">&gt; -pthread flag on fortran compiler?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry, no -- Open MPI requires threading support.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26974.php">http://www.open-mpi.org/community/lists/users/2015/05/26974.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26979/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26980.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26978.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>In reply to:</strong> <a href="26974.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26982.php">Timothy Brown: "Re: [OMPI users] Openmpi compilation errors"</a>
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
