<?
$subject_val = "Re: [OMPI users] Openmpi compilation errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 13:13:22 2015" -->
<!-- isoreceived="20150528171322" -->
<!-- sent="Thu, 28 May 2015 17:08:19 +0000" -->
<!-- isosent="20150528170819" -->
<!-- name="Bruno Queiros" -->
<!-- email="bqueiros_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi compilation errors" -->
<!-- id="CAOnd8MCS9ZzawOfEV_GujGb+JkUfJ1W2qj=HKR8jFN8fc+CNjA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAOnd8MB3fS6NTP7YrTqGqD=kRHdWcnoPHO157wX05kJEmN=RtQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-05-28 13:08:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26968.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26966.php">Mike Dubman: "Re: [OMPI users] MXM problem"</a>
<li><strong>In reply to:</strong> <a href="26964.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26968.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26968.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26969.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thomas
<br>
<p>I did get a configure successfull, but make fails with
<br>
<p>pgf90-Error-Unknown switch: -pthread
<br>
make[2]: *** [libmpi_usempi.la] Error 1
<br>
<p>I have tried and did a fake pgf90 has mentioned on the mailing list
<br>
<p>#! /bin/bash
<br>
newargs='echo $@ | sed s/-pthread//g -'
<br>
#echo &quot;/opt/pgi/linux86-64/10.4/bin/pgf90  $newargs&quot;
<br>
/opt/pgi/linux86-64/10.4/bin/pgf90  $newargs
<br>
exit
<br>
<p>But for some reason this doesn't work, the make just stops.
<br>
<p>Can you point me in the right direction?
<br>
<p>Em qui, 28 de mai de 2015 &#195;&#160;s 14:10, Bruno Queiros &lt;bqueiros_at_[hidden]&gt;
<br>
escreveu:
<br>
<p><span class="quotelev1">&gt; Thank you very much Thomas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will try this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Em qui, 28 de mai de 2015 &#195;&#160;s 12:25, Thomas Jahns &lt;jahns_at_[hidden]&gt; escreveu:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 05/28/15 12:20, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sounds like your pgcc compiler installation is busted.  You'll need to
</span><br>
<span class="quotelev2">&gt;&gt; get that fixed to compile/install Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An alternative might be to use a system compiler (which is probably gcc or
</span><br>
<span class="quotelev2">&gt;&gt; clang) for C and C++ and only use pgfortran for the Fortran parts of
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI,
</span><br>
<span class="quotelev2">&gt;&gt; i.e. try something like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure CC=gcc CXX=g++ FC=pgf90 F77=pgf77 F90=pgf90
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/opt/openmpi-1.8.5_pgf90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards, Thomas Jahns
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26963.php">http://www.open-mpi.org/community/lists/users/2015/05/26963.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26967/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26968.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26966.php">Mike Dubman: "Re: [OMPI users] MXM problem"</a>
<li><strong>In reply to:</strong> <a href="26964.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26968.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26968.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26969.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
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
