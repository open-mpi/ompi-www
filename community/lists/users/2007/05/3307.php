<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 21 22:35:55 2007" -->
<!-- isoreceived="20070522023555" -->
<!-- sent="Mon, 21 May 2007 20:35:41 -0600" -->
<!-- isosent="20070522023541" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Weird interaction with modem under OS X" -->
<!-- id="479BC6E9-201B-479B-8E27-5202D95B266B_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EFAEF269-196C-44F1-9D71-BDC01EE95F11_at_nasa.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-21 22:35:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3308.php">Götz Waschk: "Re: [OMPI users] Gridengine integration problems"</a>
<li><strong>Previous message:</strong> <a href="3306.php">Tom Clune: "[OMPI users] Weird interaction with modem under OS X"</a>
<li><strong>In reply to:</strong> <a href="3306.php">Tom Clune: "[OMPI users] Weird interaction with modem under OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3309.php">Tom Clune: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 21, 2007, at 7:40 PM, Tom Clune wrote:
<br>
<p><span class="quotelev1">&gt; Executive summary: mpirun hangs when laptop is connected via  
</span><br>
<span class="quotelev1">&gt; cellular modem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Longer description: Under ordinary circumstances mpirun behaves as  
</span><br>
<span class="quotelev1">&gt; expected on my OS X (Intel-duo) laptop.  I only want to be using  
</span><br>
<span class="quotelev1">&gt; the shared-memory mechanism - i.e. not sending packets across any  
</span><br>
<span class="quotelev1">&gt; networks.   When my laptop is connected to the internet via  
</span><br>
<span class="quotelev1">&gt; ethernet or wireless (or not connected to the network at all)  
</span><br>
<span class="quotelev1">&gt; mpirun works just fine, but if I connect via my nifty new cellular  
</span><br>
<span class="quotelev1">&gt; modem (Verizon in case it matters), mpirun hangs at launch.  I.e.  
</span><br>
<span class="quotelev1">&gt; my application never even starts, and I have to use &lt;ctrl-z&gt; to  
</span><br>
<span class="quotelev1">&gt; interrupt to regain a prompt.   I'd like to be able to engage in  
</span><br>
<span class="quotelev1">&gt; other activities (mail, cvs, skype) while executing mpi code in the  
</span><br>
<span class="quotelev1">&gt; background, so I'm really hoping there is a simple switch to fix this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am launching with the command:  &quot;mpirun -np 2 ./gx&quot;.   I have  
</span><br>
<span class="quotelev1">&gt; also tried &quot;mpirun --mca btl self,sm -np 2 ./gx&quot; but that did not  
</span><br>
<span class="quotelev1">&gt; seem to improve the situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached the output from &quot;ompi_info --all&quot;.  The output does  
</span><br>
<span class="quotelev1">&gt; not seem to depend on whether I am connected via the modem or not.
</span><br>
<p>If you run &quot;mpirun -np 1 uptime&quot; with your cell modem up, does that  
<br>
work?  This isn't one of those corner cases we test very often :).   
<br>
If it doesn't work, could you send the output of 'ifconfig'?  One  
<br>
thing to try would be telling Open MPI to not use the network device  
<br>
for the modem.  For example, if it is ppp0, try:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np 1 -mca oob_tcp_exclude ppp0 uptime
<br>
<p>Good luck,
<br>
<p>Brian
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3307/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3308.php">Götz Waschk: "Re: [OMPI users] Gridengine integration problems"</a>
<li><strong>Previous message:</strong> <a href="3306.php">Tom Clune: "[OMPI users] Weird interaction with modem under OS X"</a>
<li><strong>In reply to:</strong> <a href="3306.php">Tom Clune: "[OMPI users] Weird interaction with modem under OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3309.php">Tom Clune: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
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
