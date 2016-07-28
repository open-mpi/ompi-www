<?
$subject_val = "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 11 13:21:43 2013" -->
<!-- isoreceived="20131011172143" -->
<!-- sent="Fri, 11 Oct 2013 10:21:39 -0700" -->
<!-- isosent="20131011172139" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun" -->
<!-- id="56753BD0-FC73-4712-95AF-98F6F63225CD_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAC2Zy4MT6LqEkgbBUCSPpVxAisJEXzS7TqOknzfo-nk91_RVhQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-11 13:21:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0200.php">Shao-Ching Huang: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Previous message:</strong> <a href="0198.php">Kelly Black: "[OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>In reply to:</strong> <a href="0198.php">Kelly Black: "[OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0200.php">Shao-Ching Huang: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Reply:</strong> <a href="0200.php">Shao-Ching Huang: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I *think* that should work, but I haven't personally tested it.
<br>
<p>On Oct 11, 2013, at 9:27 AM, Kelly Black &lt;kjblack_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a question about the --host and --hostfile flags used by mpirun. Do you have to use fully qualified host names in the arguments to the --host option if the fully qualified domain name is given in the host file?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, if I have a host file like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # myhosts.txt
</span><br>
<span class="quotelev1">&gt; thingOne.clarkson.edu=4
</span><br>
<span class="quotelev1">&gt; thingTwo.clarkson.edu=4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can I then use the following command?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile myhosts.txt --host thingOne -np 3 bubba
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; kel
</span><br>
<span class="quotelev1">&gt; _______________________________________________________
</span><br>
<span class="quotelev1">&gt; Kelly Black                     Phone: (315) 600-8334
</span><br>
<span class="quotelev1">&gt; Clarkson University             Fax:   (315) 268-2371
</span><br>
<span class="quotelev1">&gt; Department of Math. &amp; C.S.      
</span><br>
<span class="quotelev1">&gt; PO Box 5815
</span><br>
<span class="quotelev1">&gt; Potsdam, NY 13699-5815
</span><br>
<span class="quotelev1">&gt; USA
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/docs/att-0199/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0200.php">Shao-Ching Huang: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Previous message:</strong> <a href="0198.php">Kelly Black: "[OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>In reply to:</strong> <a href="0198.php">Kelly Black: "[OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0200.php">Shao-Ching Huang: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Reply:</strong> <a href="0200.php">Shao-Ching Huang: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
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
