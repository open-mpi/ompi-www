<?
$subject_val = "Re: [OMPI users] Open Mpi execution error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 11:50:17 2014" -->
<!-- isoreceived="20140407155017" -->
<!-- sent="Mon, 7 Apr 2014 17:50:17 +0200" -->
<!-- isosent="20140407155017" -->
<!-- name="Hamid Saeed" -->
<!-- email="e.hamidsaeed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open Mpi execution error" -->
<!-- id="CAADBNWzSyOwq9gTkZopyg2v0BA-CJBsLOTFMKVT7yj5iTJK7uQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="534176AF.6010101_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open Mpi execution error<br>
<strong>From:</strong> Hamid Saeed (<em>e.hamidsaeed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 11:50:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24081.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Previous message:</strong> <a href="24079.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>In reply to:</strong> <a href="24078.php">Kamal: "Re: [OMPI users] Open Mpi execution error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24081.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Reply:</strong> <a href="24081.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
make -j&lt;number of processors you want to assign for the make&gt;
<br>
<p><p>It is very simple to uninstall
<br>
<p>go to the
<br>
/usr/local/
<br>
here you will find
<br>
lib,bin etc these are the file of MPI.
<br>
just type
<br>
rm -r &lt;name of the file&gt;
<br>
<p>and also next time when you want to install i will recommend you use
<br>
<p>./configure --prefix=/usr/local/mpi_installation
<br>
make -j2
<br>
make install
<br>
<p>include the following lines in your .bashrc file.
<br>
<p>export PATH=/usr/local/mpi_installation/bin:$PATH
<br>
export LD_LIBRARY_PATH=
<br>
<p>/usr/local/mpi_installation/lib:$LD_LIBRARY_PATH
<br>
<p>best of luck.
<br>
<p><p>On Sun, Apr 6, 2014 at 5:45 PM, Kamal &lt;infikamal5_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use OMPI 1.8 for Macbook OS X mavericks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you said I will create a new directory to install my MPI files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your reply,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kamal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 07/04/2014 17:37, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What version of OMPI are you attempting to install?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Also, using /usr/local as your prefix is a VERY, VERY BAD idea. Most OS
</span><br>
<span class="quotelev1">&gt; distributions come with a (typically old) version of OMPI installed in the
</span><br>
<span class="quotelev1">&gt; system area. Overlaying that with another version can easily lead to the
</span><br>
<span class="quotelev1">&gt; errors you show.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  You should always install to a user-level directory and then set your
</span><br>
<span class="quotelev1">&gt; path and ld_library_path to start with that location
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Apr 6, 2014, at 8:30 AM, Kamal &lt;infikamal5_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hello Open MPI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I installed open-mpi with
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/
</span><br>
<span class="quotelev1">&gt;  make all
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  then I launched my sample code which gave me this error
</span><br>
<span class="quotelev1">&gt; my LD_LIBRARY_PATH=/usr/local/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I have attached the output file with this mail
</span><br>
<span class="quotelev1">&gt; could some one please help me with this .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Kamal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &lt;out.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
_______________________________________________
Hamid Saeed
CoSynth GmbH &amp; Co. KG
Escherweg 2 - 26121 Oldenburg - Germany
Tel +49 441 9722 738 | Fax -278
<a href="http://www.cosynth.com">http://www.cosynth.com</a>
_______________________________________________
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24080/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24081.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Previous message:</strong> <a href="24079.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>In reply to:</strong> <a href="24078.php">Kamal: "Re: [OMPI users] Open Mpi execution error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24081.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Reply:</strong> <a href="24081.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
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
