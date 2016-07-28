<?
$subject_val = "Re: [OMPI users] Rmpi installation issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 13 13:06:04 2008" -->
<!-- isoreceived="20081013170604" -->
<!-- sent="Mon, 13 Oct 2008 19:06:00 +0200" -->
<!-- isosent="20081013170600" -->
<!-- name="Simone Giannerini" -->
<!-- email="sgiannerini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rmpi installation issues" -->
<!-- id="3c12769c0810131006p671b341dr81eef4ca730aff10_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3c12769c0810130910v52b07302uca04aa17ee13cc7c_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-10-13 13:06:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6973.php">Dirk Eddelbuettel: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Previous message:</strong> <a href="6971.php">Jeff Squyres: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>In reply to:</strong> <a href="6969.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev3">&gt;&gt;&gt; # ln -s /usr/lib64/mpi/gcc/openmpi/lib64/ /usr/lib64/mpi/gcc/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # CC=&quot;mpicc&quot; R CMD INSTALL Rmpi_0.5-5.tar.gz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --configure-args=--with-mpi=/usr/lib64/mpi/gcc/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can drop the --configure-args. Using the correct mpicc should
</span><br>
<span class="quotelev2">&gt;&gt; take care of all the linking, etc.
</span><br>
<span class="quotelev1">&gt;You can probably also drop the sym link.
</span><br>
<p>I am afraid I cannot, moreover, for some reason, from a non root account I
<br>
get:
<br>
<p>giannerini_at_gauss:~&gt; su
<br>
[...]
<br>
gauss:/home/giannerini # cd /root/Desktop/
<br>
gauss:~/Desktop # CC=&quot;mpicc&quot;  R CMD INSTALL  Rmpi_0.5-5.tar.gz
<br>
--configure-args=--with-mpi=/usr/lib64/mpi/gcc/openmpi/
<br>
* Installing to library '/usr/local/lib64/R/library'
<br>
* Installing *source* package 'Rmpi' ...
<br>
checking for gcc... mpicc
<br>
checking for C compiler default output file name... a.out
<br>
checking whether the C compiler works... configure: error: cannot run C
<br>
compiled programs.
<br>
If you meant to cross compile, use `--host'.
<br>
See `config.log' for more details.
<br>
ERROR: configuration failed for package 'Rmpi'
<br>
** Removing '/usr/local/lib64/R/library/Rmpi'
<br>
** Restoring previous '/usr/local/lib64/R/library/Rmpi'
<br>
<p>gauss:~/Desktop #   R CMD INSTALL  Rmpi_0.5-5.tar.gz
<br>
--configure-args=--with-mpi=/usr/lib64/mpi/gcc/openmpi/
<br>
* Installing to library '/usr/local/lib64/R/library'
<br>
[...]
<br>
** building package indices ...
<br>
* DONE (Rmpi)
<br>
<p>Notice that now it works only if I remove the CC directive. In any case I
<br>
confirm that I can load the package Rmpi even if I am experiencing some
<br>
problems, will study a bit and in case get back to the forum, thanks again.
<br>
<pre>
-- 
______________________________________________________
Simone Giannerini
Dipartimento di Scienze Statistiche &quot;Paolo Fortunati&quot;
Universita' di Bologna
Via delle belle arti 41 - 40126  Bologna,  ITALY
Tel: +39 051 2098262  Fax: +39 051 232153
<a href="http://www2.stat.unibo.it/giannerini/">http://www2.stat.unibo.it/giannerini/</a>
______________________________________________________
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6972/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6973.php">Dirk Eddelbuettel: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Previous message:</strong> <a href="6971.php">Jeff Squyres: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>In reply to:</strong> <a href="6969.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
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
