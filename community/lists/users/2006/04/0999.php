<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 11:54:25 2006" -->
<!-- isoreceived="20060410155425" -->
<!-- sent="Mon, 10 Apr 2006 11:54:23 -0400" -->
<!-- isosent="20060410155423" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Funny ./configure option" -->
<!-- id="686FE4FC-1358-467B-B96D-EB61C21927AB_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="op.s7stsah8ies9li_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-10 11:54:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1000.php">Josh Hursey: "Re: [OMPI users] any checkpoint/restart function in Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="0998.php">Troy Telford: "[OMPI users] Funny ./configure option"</a>
<li><strong>In reply to:</strong> <a href="0998.php">Troy Telford: "[OMPI users] Funny ./configure option"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 10, 2006, at 11:39 AM, Troy Telford wrote:
<br>
<p><span class="quotelev1">&gt; This isn't a problem for me; it's more of a bugreport.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When running ./configure --help, (on Open MPI 1.0.2) I found the  
</span><br>
<span class="quotelev1">&gt; following
</span><br>
<span class="quotelev1">&gt; source of amusement:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    --enable-smp-locks      disable smp locks in atomic ops (default:
</span><br>
<span class="quotelev1">&gt; enabled)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It occured to me that this may cause a bit of confusion...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Whenever --enable-X is used to DISable something, it's bound to  
</span><br>
<span class="quotelev1">&gt; cause some
</span><br>
<span class="quotelev1">&gt; head scratching.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; default:enabled -- does this mean the option which /dis/ables the SMP
</span><br>
<span class="quotelev1">&gt; locks is the default, or does it mean that SMP locks are enabled by
</span><br>
<span class="quotelev1">&gt; default.
</span><br>
<p>Wow...  I'm going to go hide in shame for that one.  I take full  
<br>
credit for that bit of stupidity.  So, to clarify while I go fix the  
<br>
configure option:
<br>
<p>&nbsp;&nbsp;&nbsp;--enable-smp-locks:     enables SMP locks in atomic ops (this is  
<br>
the default)
<br>
&nbsp;&nbsp;&nbsp;--disable-smp-locks:    disables SMPI locks in atomic ops (not the  
<br>
default)
<br>
<p>Note that unless you're running single threaded benchmarks, you  
<br>
probably don't want to use this option.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1000.php">Josh Hursey: "Re: [OMPI users] any checkpoint/restart function in Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="0998.php">Troy Telford: "[OMPI users] Funny ./configure option"</a>
<li><strong>In reply to:</strong> <a href="0998.php">Troy Telford: "[OMPI users] Funny ./configure option"</a>
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
