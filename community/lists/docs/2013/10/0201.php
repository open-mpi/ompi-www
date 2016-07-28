<?
$subject_val = "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 11 13:54:42 2013" -->
<!-- isoreceived="20131011175442" -->
<!-- sent="Fri, 11 Oct 2013 13:54:41 -0400" -->
<!-- isosent="20131011175441" -->
<!-- name="Kelly Black" -->
<!-- email="kjblack_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun" -->
<!-- id="CAC2Zy4Ov9-9BmGqgM8AZQKry7zGOUmWpPTW6b-k9PMSVxhBLsQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAEjxLRGeq6SA0vuxqrX9+ZKaPUpKhZ_DRci4Vh2+b4dq8TPi7A_at_mail.gmail.com" -->
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
<strong>From:</strong> Kelly Black (<em>kjblack_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-11 13:54:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0202.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Previous message:</strong> <a href="0200.php">Shao-Ching Huang: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>In reply to:</strong> <a href="0200.php">Shao-Ching Huang: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0202.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Reply:</strong> <a href="0202.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I thought that the &quot;slots&quot; flag was optional in the host file format where
<br>
the slots option gives the max no. of slots?
<br>
<p>-Kel
<br>
_______________________________________________________
<br>
Kelly Black                     Phone: (315) 600-8334
<br>
Clarkson University             Fax:   (315) 268-2371
<br>
Department of Math. &amp; C.S.
<br>
PO Box 5815
<br>
Potsdam, NY 13699-5815
<br>
USA
<br>
<p><p>On Fri, Oct 11, 2013 at 1:24 PM, Shao-Ching Huang &lt;huangsc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Kel:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe the ompi hostfile format is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # myhosts.txt
</span><br>
<span class="quotelev1">&gt; thingOne.clarkson.edu slots=4
</span><br>
<span class="quotelev1">&gt; thingTwo.clarkson.edu slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shao-Ching
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 11, 2013 at 10:21 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I *think* that should work, but I haven't personally tested it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 11, 2013, at 9:27 AM, Kelly Black &lt;kjblack_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a question about the --host and --hostfile flags used by mpirun.
</span><br>
<span class="quotelev2">&gt;&gt; Do you have to use fully qualified host names in the arguments to the
</span><br>
<span class="quotelev2">&gt;&gt; --host option if the fully qualified domain name is given in the host file?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For example, if I have a host file like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # myhosts.txt
</span><br>
<span class="quotelev2">&gt;&gt; thingOne.clarkson.edu &lt;<a href="http://thingone.clarkson.edu/">http://thingone.clarkson.edu/</a>&gt;=4
</span><br>
<span class="quotelev2">&gt;&gt; thingTwo.clarkson.edu &lt;<a href="http://thingtwo.clarkson.edu/">http://thingtwo.clarkson.edu/</a>&gt;=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can I then use the following command?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --hostfile myhosts.txt --host thingOne -np 3 bubba
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sincerely,
</span><br>
<span class="quotelev2">&gt;&gt; kel
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; Kelly Black                     Phone: (315) 600-8334
</span><br>
<span class="quotelev2">&gt;&gt; Clarkson University             Fax:   (315) 268-2371
</span><br>
<span class="quotelev2">&gt;&gt; Department of Math. &amp; C.S.
</span><br>
<span class="quotelev2">&gt;&gt; PO Box 5815
</span><br>
<span class="quotelev2">&gt;&gt; Potsdam, NY 13699-5815
</span><br>
<span class="quotelev2">&gt;&gt; USA
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; docs mailing list
</span><br>
<span class="quotelev2">&gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; docs mailing list
</span><br>
<span class="quotelev2">&gt;&gt; docs_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/docs/att-0201/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0202.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Previous message:</strong> <a href="0200.php">Shao-Ching Huang: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>In reply to:</strong> <a href="0200.php">Shao-Ching Huang: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0202.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<li><strong>Reply:</strong> <a href="0202.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
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
