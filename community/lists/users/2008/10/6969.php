<?
$subject_val = "Re: [OMPI users] Rmpi installation issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 13 12:10:09 2008" -->
<!-- isoreceived="20081013161009" -->
<!-- sent="Mon, 13 Oct 2008 18:10:05 +0200" -->
<!-- isosent="20081013161005" -->
<!-- name="Simone Giannerini" -->
<!-- email="sgiannerini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rmpi installation issues" -->
<!-- id="3c12769c0810130910v52b07302uca04aa17ee13cc7c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3c12769c0810130656w54795b31la29afa439f2de1c9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Rmpi installation issues<br>
<strong>From:</strong> Simone Giannerini (<em>sgiannerini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-13 12:10:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6970.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Previous message:</strong> <a href="6968.php">Dirk Eddelbuettel: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>In reply to:</strong> <a href="6966.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6970.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Reply:</strong> <a href="6970.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Reply:</strong> <a href="6972.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[...]
<br>
<span class="quotelev1">&gt; Your mail is basically unreadable / impossible to attribute what is
</span><br>
<span class="quotelev1">&gt; original and what is cited. Please follow convention and indent.
</span><br>
<p>I am sorry, I am copy/pasting the messages because I switched off receiving
<br>
list mails. I forgot to ask to reply also to my personal address.
<br>
<p>Hope this one is readable
<br>
[...]
<br>
<p><span class="quotelev1">&gt; Ok, didn't see that. But please do understand that 0.5-5 is on CRAN
</span><br>
<span class="quotelev1">&gt; and released. (And yes, that is the version for which I also had to
</span><br>
<span class="quotelev1">&gt; make a fix to get it build on Debian as mentioned).
</span><br>
<p>Ok I 'll stick to that one
<br>
<p>[...]
<br>
<p><span class="quotelev1">&gt; Not it does not as lib64 != lib. You probably it installed if you
</span><br>
<span class="quotelev1">&gt; create a softlink from
</span><br>
<p><span class="quotelev1">&gt;        /usr/lib64/mpi/gcc/openmpi/lib64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1"> &gt;       /usr/lib64/mpi/gcc/openmpi/lib
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1">&gt; Dirk
</span><br>
<p>Thank you, the following works for me:
<br>
<p># ln -s /usr/lib64/mpi/gcc/openmpi/lib64/ /usr/lib64/mpi/gcc/openmpi/lib
<br>
# CC=&quot;mpicc&quot;  R CMD INSTALL  Rmpi_0.5-5.tar.gz
<br>
--configure-args=--with-mpi=/usr/lib64/mpi/gcc/openmpi/
<br>
<p># mpirun --version
<br>
mpirun (Open MPI) 1.2.5
<br>
<p>So far so good, thanks also to *Sean Davis.*
<br>
<p>*ciao*
<br>
<p>*Simone*
<br>
______________________________________________________
<br>
<p>Simone Giannerini
<br>
Dipartimento di Scienze Statistiche &quot;Paolo Fortunati&quot;
<br>
Universita' di Bologna
<br>
Via delle belle arti 41 - 40126  Bologna,  ITALY
<br>
Tel: +39 051 2098262  Fax: +39 051 232153
<br>
<a href="http://www2.stat.unibo.it/giannerini/">http://www2.stat.unibo.it/giannerini/</a>
<br>
______________________________________________________
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6969/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6970.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Previous message:</strong> <a href="6968.php">Dirk Eddelbuettel: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>In reply to:</strong> <a href="6966.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6970.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Reply:</strong> <a href="6970.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Reply:</strong> <a href="6972.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
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
