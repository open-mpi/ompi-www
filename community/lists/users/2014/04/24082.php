<?
$subject_val = "Re: [OMPI users] Open Mpi execution error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 12:56:37 2014" -->
<!-- isoreceived="20140407165637" -->
<!-- sent="Mon, 7 Apr 2014 18:56:35 +0200" -->
<!-- isosent="20140407165635" -->
<!-- name="Kamal Selvam" -->
<!-- email="infikamal5_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open Mpi execution error" -->
<!-- id="CABNC13GM5jS0cqLsTeutrzz3DJKkbVv7nbeBDZwQgSXNdUE7gA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="82830F7F-E4EB-4ED1-A688-E461A055FA67_at_open-mpi.org" -->
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
<strong>From:</strong> Kamal Selvam (<em>infikamal5_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 12:56:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24083.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="24081.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>In reply to:</strong> <a href="24081.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24074.php">Hamid Saeed: "Re: [OMPI users] Open Mpi execution error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot for your help, It worked finally.
<br>
<p><p>On Mon, Apr 7, 2014 at 6:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Deleting the install as you describe is a VERY bad idea. As I explained
</span><br>
<span class="quotelev1">&gt; elsewhere, the system generally comes with an installation. Blowing things
</span><br>
<span class="quotelev1">&gt; away can destabilize other areas of the system unless you are (a) very
</span><br>
<span class="quotelev1">&gt; careful, and (b) very lucky
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just stay away from the system directories, please.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 7, 2014, at 8:50 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make -j&lt;number of processors you want to assign for the make&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is very simple to uninstall
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; go to the
</span><br>
<span class="quotelev1">&gt; /usr/local/
</span><br>
<span class="quotelev1">&gt; here you will find
</span><br>
<span class="quotelev1">&gt; lib,bin etc these are the file of MPI.
</span><br>
<span class="quotelev1">&gt; just type
</span><br>
<span class="quotelev1">&gt; rm -r &lt;name of the file&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and also next time when you want to install i will recommend you use
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/mpi_installation
</span><br>
<span class="quotelev1">&gt; make -j2
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; include the following lines in your .bashrc file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=/usr/local/mpi_installation/bin:$PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=
</span><br>
<span class="quotelev1">&gt; /usr/local/mpi_installation/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; best of luck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Apr 6, 2014 at 5:45 PM, Kamal &lt;infikamal5_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use OMPI 1.8 for Macbook OS X mavericks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As you said I will create a new directory to install my MPI files.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your reply,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kamal.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 07/04/2014 17:37, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What version of OMPI are you attempting to install?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Also, using /usr/local as your prefix is a VERY, VERY BAD idea. Most OS
</span><br>
<span class="quotelev2">&gt;&gt; distributions come with a (typically old) version of OMPI installed in the
</span><br>
<span class="quotelev2">&gt;&gt; system area. Overlaying that with another version can easily lead to the
</span><br>
<span class="quotelev2">&gt;&gt; errors you show.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  You should always install to a user-level directory and then set your
</span><br>
<span class="quotelev2">&gt;&gt; path and ld_library_path to start with that location
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On Apr 6, 2014, at 8:30 AM, Kamal &lt;infikamal5_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hello Open MPI,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I installed open-mpi with
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/usr/local/
</span><br>
<span class="quotelev2">&gt;&gt;  make all
</span><br>
<span class="quotelev2">&gt;&gt; make install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  then I launched my sample code which gave me this error
</span><br>
<span class="quotelev2">&gt;&gt; my LD_LIBRARY_PATH=/usr/local/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I have attached the output file with this mail
</span><br>
<span class="quotelev2">&gt;&gt; could some one please help me with this .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Kamal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  &lt;out.txt&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; Hamid Saeed
</span><br>
<span class="quotelev1">&gt; CoSynth GmbH &amp; Co. KG
</span><br>
<span class="quotelev1">&gt; Escherweg 2 - 26121 Oldenburg - Germany
</span><br>
<span class="quotelev1">&gt; Tel +49 441 9722 738 | Fax -278
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cosynth.com">http://www.cosynth.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24082/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24083.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="24081.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>In reply to:</strong> <a href="24081.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24074.php">Hamid Saeed: "Re: [OMPI users] Open Mpi execution error"</a>
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
