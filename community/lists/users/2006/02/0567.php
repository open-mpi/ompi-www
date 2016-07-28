<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  2 19:42:59 2006" -->
<!-- isoreceived="20060203004259" -->
<!-- sent="Thu, 02 Feb 2006 16:41:51 -0800" -->
<!-- isosent="20060203004151" -->
<!-- name="Jean-Christophe Hugly" -->
<!-- email="jice_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] does btl_openib work ?" -->
<!-- id="1138927311.22996.138.camel_at_jhugly.pantasys.com" -->
<!-- inreplyto="4FBE0C2F-1A72-4C90-B9C9-9CB2E0188C45_at_lanl.gov" -->
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
<strong>From:</strong> Jean-Christophe Hugly (<em>jice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-02 19:41:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0568.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Previous message:</strong> <a href="0566.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>In reply to:</strong> <a href="0564.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0568.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2006-02-02 at 15:19 -0700, Galen M. Shipman wrote:
<br>
<span class="quotelev1">&gt; By using slots=4 you are telling Open MPI to put the first 4  
</span><br>
<span class="quotelev1">&gt; processes on the &quot;bench1&quot; host.
</span><br>
<span class="quotelev1">&gt; Open MPI will therefore use shared memory to communicate between the  
</span><br>
<span class="quotelev1">&gt; processes not Infiniband.
</span><br>
<p>Well, actually not, unless I'm mistaken about that. In my
<br>
mca-params.conf I have :
<br>
<p>rmaps_base_schedule_policy = node
<br>
<p>That would spread processes over nodes, right ?
<br>
<p><span class="quotelev1">&gt; You might try:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -prefix /opt/ompi -wdir `pwd` -machinefile /root/machines -np  
</span><br>
<span class="quotelev1">&gt; 2 -d xterm -e gdb PMB-MPI1
</span><br>
<p>Thanks for the tip. The last time I tried this it took quite a few
<br>
attempts before getting it right. As I did not remember the magic trick,
<br>
I was somewhat reluctant to go in that direction. Since you just handed
<br>
me the recipe on a sliver plate, I'll do it.
<br>
<p>J-C
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0568.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Previous message:</strong> <a href="0566.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>In reply to:</strong> <a href="0564.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0568.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work ?"</a>
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
