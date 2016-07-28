<?
$subject_val = "Re: [OMPI users] Open Mpi execution error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 11:42:48 2014" -->
<!-- isoreceived="20140407154248" -->
<!-- sent="Sun, 06 Apr 2014 17:44:11 +0200" -->
<!-- isosent="20140406154411" -->
<!-- name="Kamal" -->
<!-- email="infikamal5_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open Mpi execution error" -->
<!-- id="5341764B.9020508_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAADBNWyzZWNqU0pg9USvDOZ9OH9zSDB4Bj-TqPi3TcEJTGxX9Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Kamal (<em>infikamal5_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-06 11:44:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24077.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8 &quot;rmaps seq&quot; doesn't work"</a>
<li><strong>Previous message:</strong> <a href="24075.php">Nathan Hjelm: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>In reply to:</strong> <a href="24074.php">Hamid Saeed: "Re: [OMPI users] Open Mpi execution error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24079.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Reply:</strong> <a href="24079.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Hamid,
<br>
<p>So I can uninstall just by typing
<br>
<p>' make uninstall ' right ?
<br>
<p>what does ' make -j2 ' do ?
<br>
<p>Thanks for your reply,
<br>
Kamal
<br>
<p>On 07/04/2014 17:38, Hamid Saeed wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also had a same problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but when i re-installed MPI using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; -j2
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it worked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Apr 6, 2014 at 5:30 PM, Kamal &lt;infikamal5_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:infikamal5_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello Open MPI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I installed open-mpi with
</span><br>
<span class="quotelev1">&gt;     ./configure --prefix=/usr/local/
</span><br>
<span class="quotelev1">&gt;     make all
</span><br>
<span class="quotelev1">&gt;     make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     then I launched my sample code which gave me this error
</span><br>
<span class="quotelev1">&gt;     my LD_LIBRARY_PATH=/usr/local/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I have attached the output file with this mail
</span><br>
<span class="quotelev1">&gt;     could some one please help me with this .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Kamal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hamid Saeed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CoSynth GmbH &amp; Co. KG
</span><br>
<span class="quotelev1">&gt; Escherweg 2 - 26121 Oldenburg - Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel +49 441 9722 738 | Fax -278
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cosynth.com">http://www.cosynth.com</a> &lt;<a href="http://www.cosynth.com/">http://www.cosynth.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24076/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24077.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8 &quot;rmaps seq&quot; doesn't work"</a>
<li><strong>Previous message:</strong> <a href="24075.php">Nathan Hjelm: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>In reply to:</strong> <a href="24074.php">Hamid Saeed: "Re: [OMPI users] Open Mpi execution error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24079.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Reply:</strong> <a href="24079.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
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
