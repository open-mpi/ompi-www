<?
$subject_val = "Re: [OMPI users] Openmpi compilation errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 06:14:14 2015" -->
<!-- isoreceived="20150529101414" -->
<!-- sent="Fri, 29 May 2015 10:14:02 +0000" -->
<!-- isosent="20150529101402" -->
<!-- name="Bruno Queiros" -->
<!-- email="bqueiros_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi compilation errors" -->
<!-- id="CAOnd8MBuyGBmyMEAG-f=V4S1GWyFxRAbEkFUm+N_bEBCois0NA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55675209.70609_at_mpimet.mpg.de" -->
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
<strong>Date:</strong> 2015-05-29 06:14:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26970.php">&#208;&#162;&#208;&#184;&#208;&#188;&#209;&#131;&#209;&#128; &#208;&#152;&#209;&#129;&#208;&#188;&#208;&#176;&#208;&#179;&#208;&#184;&#208;&#187;&#208;&#190;&#208;&#178;: "Re: [OMPI users] MXM problem"</a>
<li><strong>In reply to:</strong> <a href="26969.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for the help Luis
<br>
<p>I did as you told me, i created a .pfg90.rc on the home directory of my
<br>
user with:
<br>
<p>switch -pthread is replace(-lpthread) positional(linker)
<br>
<p>i tried to compile openmpi with make, but i still got the same error.
<br>
<p>Am i doing something wrong? How can i overcome this -pthread error?
<br>
<p><p>Em qui, 28 de mai de 2015 &#195;&#160;s 18:36, Luis Kornblueh &lt;
<br>
luis.kornblueh_at_[hidden]&gt; escreveu:
<br>
<p><span class="quotelev1">&gt; Hi Bruno,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; once more: it might be the case that the file needs to be named .pgf90rc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry,
</span><br>
<span class="quotelev1">&gt; Luis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 28/05/15 19:08, Bruno Queiros wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Thomas
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I did get a configure successfull, but make fails with
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; pgf90-Error-Unknown switch: -pthread
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [libmpi_usempi.la &lt;<a href="http://libmpi_usempi.la">http://libmpi_usempi.la</a>&gt;] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have tried and did a fake pgf90 has mentioned on the mailing list
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #! /bin/bash
</span><br>
<span class="quotelev2">&gt; &gt; newargs='echo $@ | sed s/-pthread//g -'
</span><br>
<span class="quotelev2">&gt; &gt; #echo &quot;/opt/pgi/linux86-64/10.4/bin/pgf90  $newargs&quot;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/pgi/linux86-64/10.4/bin/pgf90  $newargs
</span><br>
<span class="quotelev2">&gt; &gt; exit
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But for some reason this doesn't work, the make just stops.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you point me in the right direction?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Em qui, 28 de mai de 2015 &#195;&#160;s 14:10, Bruno Queiros &lt;bqueiros_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mailto:bqueiros_at_[hidden]&gt;&gt; escreveu:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Thank you very much Thomas
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     I will try this
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Em qui, 28 de mai de 2015 &#195;&#160;s 12:25, Thomas Jahns &lt;jahns_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;     &lt;mailto:jahns_at_[hidden]&gt;&gt; escreveu:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         On 05/28/15 12:20, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt; &gt;          &gt; Sounds like your pgcc compiler installation is busted.
</span><br>
<span class="quotelev2">&gt; &gt;         You'll need to get that fixed to compile/install Open MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         An alternative might be to use a system compiler (which is
</span><br>
<span class="quotelev2">&gt; &gt;         probably gcc or
</span><br>
<span class="quotelev2">&gt; &gt;         clang) for C and C++ and only use pgfortran for the Fortran
</span><br>
<span class="quotelev2">&gt; &gt;         parts of OpenMPI,
</span><br>
<span class="quotelev2">&gt; &gt;         i.e. try something like
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         ./configure CC=gcc CXX=g++ FC=pgf90 F77=pgf77 F90=pgf90
</span><br>
<span class="quotelev2">&gt; &gt;         --prefix=/opt/openmpi-1.8.5_pgf90
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Regards, Thomas Jahns
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;         users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/05/26963.php">http://www.open-mpi.org/community/lists/users/2015/05/26963.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26967.php">http://www.open-mpi.org/community/lists/users/2015/05/26967.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26969.php">http://www.open-mpi.org/community/lists/users/2015/05/26969.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26971/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26970.php">&#208;&#162;&#208;&#184;&#208;&#188;&#209;&#131;&#209;&#128; &#208;&#152;&#209;&#129;&#208;&#188;&#208;&#176;&#208;&#179;&#208;&#184;&#208;&#187;&#208;&#190;&#208;&#178;: "Re: [OMPI users] MXM problem"</a>
<li><strong>In reply to:</strong> <a href="26969.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26972.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
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
