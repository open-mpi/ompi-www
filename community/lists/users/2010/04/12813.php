<?
$subject_val = "Re: [OMPI users] deadlock when calling MPI_gatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 21:32:38 2010" -->
<!-- isoreceived="20100427013238" -->
<!-- sent="Mon, 26 Apr 2010 21:32:32 -0400" -->
<!-- isosent="20100427013232" -->
<!-- name="Teng Lin" -->
<!-- email="teng.lin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deadlock when calling MPI_gatherv" -->
<!-- id="3DB4B8BE-058A-4D98-9603-8385C7CED917_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="COL117-DS68872D76112048B82CA4BE9030_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] deadlock when calling MPI_gatherv<br>
<strong>From:</strong> Teng Lin (<em>teng.lin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 21:32:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12814.php">Ralph Castain: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>Previous message:</strong> <a href="12812.php">Trent Creekmore: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>In reply to:</strong> <a href="12812.php">Trent Creekmore: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12817.php">Terry Dontje: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 26, 2010, at 9:07 PM, Trent Creekmore wrote:
<br>
<p><span class="quotelev1">&gt; You are going to have to debug and trace the program to find out where it is
</span><br>
<span class="quotelev1">&gt; stopping.
</span><br>
<span class="quotelev1">&gt; You may want to try using KDbg, a graphical front end for the command line
</span><br>
<span class="quotelev1">&gt; debugger dbg, which makes it a LOT easier, or use Eclipse.
</span><br>
<p>As a matter of fact, I did use a debugger. Totalview in this case. But it gets me nowhere. The only thing I can tell is that both master and slave keep running inside the event loop.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12814.php">Ralph Castain: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>Previous message:</strong> <a href="12812.php">Trent Creekmore: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>In reply to:</strong> <a href="12812.php">Trent Creekmore: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12817.php">Terry Dontje: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
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
