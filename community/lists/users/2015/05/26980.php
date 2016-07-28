<?
$subject_val = "Re: [OMPI users] Openmpi compilation errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 09:44:40 2015" -->
<!-- isoreceived="20150529134440" -->
<!-- sent="Fri, 29 May 2015 13:43:50 +0000" -->
<!-- isosent="20150529134350" -->
<!-- name="Bruno Queiros" -->
<!-- email="bqueiros_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi compilation errors" -->
<!-- id="CAOnd8MAVfuceyTFQdf+4PoGib1893ven5QwBvzwxnttRhsRkDg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5568559D.50005_at_mpimet.mpg.de" -->
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
<strong>Date:</strong> 2015-05-29 09:43:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26981.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="26979.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26975.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26979.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Luis
<br>
<p>Can you point me to that documentation you're reading?
<br>
<p>Em sex, 29 de mai de 2015 &#195;&#160;s 13:04, Luis Kornblueh &lt;
<br>
luis.kornblueh_at_[hidden]&gt; escreveu:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bruno is using 10.4 as I ready only a second ago in one of his emails. I
</span><br>
<span class="quotelev1">&gt; have no idea if the compiler resource file trick works with this old one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way it has to be .mypgf90rc not .pgf90rc at least following the
</span><br>
<span class="quotelev1">&gt; current documentation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheerio,
</span><br>
<span class="quotelev1">&gt; Luis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 29/05/15 13:07, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On May 29, 2015, at 6:54 AM, Bruno Queiros &lt;bqueiros_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I understand that using Portland compiler isn't &quot;advised&quot; by Open Mpi,
</span><br>
<span class="quotelev1">&gt; i was just wondering if there's a way of doing it, since i need Open Mpi
</span><br>
<span class="quotelev1">&gt; compiled with PG fortran and not gfortran for example.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A further clarification: the Portland compiler is a fine compiler; we
</span><br>
<span class="quotelev1">&gt; certainly support it.  The only thing we recommend is avoiding mixing
</span><br>
<span class="quotelev1">&gt; compiler suites whenever possible (e.g., using one compiler for C and
</span><br>
<span class="quotelev1">&gt; another for Fortran).  It leads to complications like this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That being said, it looks like you have a Portland Fortran license, and
</span><br>
<span class="quotelev1">&gt; no corresponding Portland C license, and therefore you're somewhat forced
</span><br>
<span class="quotelev1">&gt; into this situation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The name of the binary is correct: pgf90 the name of the file is also
</span><br>
<span class="quotelev1">&gt; correct .pgf90.rc i do have some doubts about the content of the file. Is
</span><br>
<span class="quotelev1">&gt; this enough?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; switch -pthread is replace(-lpthread) positional(linker)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm not a Portland customer -- I don't know.  You'll need to check their
</span><br>
<span class="quotelev1">&gt; documentation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If i do a source .pgf90.rc i do get errors:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -bash: ./.pgf90.rc: line 1: syntax error near unexpected token `('
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -bash: ./.pgf90.rc: line 1: `switch -pthread is replace(-lpthread)
</span><br>
<span class="quotelev1">&gt; positional(linker)'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm guessing that this file is not intended to be sourced by the shell,
</span><br>
<span class="quotelev1">&gt; but rather noticed and read/used by the pgf90 compiler when it is invoked.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sidenote: isn't there a pgfortran compiler executable that is supposed
</span><br>
<span class="quotelev1">&gt; to be preferred over &quot;pgf90&quot; these days?  (remember my disclaimer: I'm not
</span><br>
<span class="quotelev1">&gt; a Portland customer, so I could be totally off base here...)  Have you
</span><br>
<span class="quotelev1">&gt; tried pgfortran to see if it accepts the -pthread option?  Sometimes the
</span><br>
<span class="quotelev1">&gt; different compiler executable entry points behave slightly differently...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Besides that i tried what you mentioned: pgf90 -pthread somefile.f90 ,
</span><br>
<span class="quotelev1">&gt; and that gives the expected error:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; pgf90 -pthread helloworld.f90
</span><br>
<span class="quotelev3">&gt; &gt;&gt; pgf90-Error-Unknown switch: -pthread
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sounds like this file is somehow not yet correct, or you have a version
</span><br>
<span class="quotelev1">&gt; of the Portland compiler that does not use this config file.  You should
</span><br>
<span class="quotelev1">&gt; check the Portland Fortran compiler documentation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you can't get this Portland config file workaround to work, you can
</span><br>
<span class="quotelev1">&gt; also make your own &quot;my_fortran_compiler&quot; script that simply strips out the
</span><br>
<span class="quotelev1">&gt; -pthread argv token and then invokes pgf90 (or pgfortran) with the rest of
</span><br>
<span class="quotelev1">&gt; the argv.  Then you can:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure FC=my_fortran_compiler ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I.e., you're just intercepting Open MPI's invocation of the Fortran
</span><br>
<span class="quotelev1">&gt; compiler, removing the CLI option that pgf90(pgfortran) won't understand,
</span><br>
<span class="quotelev1">&gt; and then invoking pgf90(pgfortran).  Make sense?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My real question is, can i change Open Mpi configuration, to not use
</span><br>
<span class="quotelev1">&gt; -pthread flag on fortran compiler?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm sorry, no -- Open MPI requires threading support.
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26975.php">http://www.open-mpi.org/community/lists/users/2015/05/26975.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26980/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26981.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="26979.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26975.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26979.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
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
