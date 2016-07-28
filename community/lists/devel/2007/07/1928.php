<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 11:08:59 2007" -->
<!-- isoreceived="20070718150859" -->
<!-- sent="Wed, 18 Jul 2007 09:08:47 -0600" -->
<!-- isosent="20070718150847" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node" -->
<!-- id="C2C3891F.A092%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070718134529.GN5125_at_minantech.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-18 11:08:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1929.php">Jeff Squyres: "[OMPI devel] optional fortran datatype fixes: 1.2.4?"</a>
<li><strong>Previous message:</strong> <a href="1927.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>In reply to:</strong> <a href="1925.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1934.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Reply:</strong> <a href="1934.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It works for me in both cases, provided I give the fully qualified host name
<br>
for your first example. In other words, these work:
<br>
<p>pn1180961:~/openmpi/trunk rhc$ mpirun -n 1 -host localhost printenv | grep
<br>
LD
<br>
[pn1180961.lanl.gov:22021] [0.0] test of print_name
<br>
OLDPWD=/Users/rhc/openmpi
<br>
LD_LIBRARY_PATH=/Users/rhc/openmpi/lib:/Users/rhc/lib:/opt/local/lib:/usr/lo
<br>
cal/lib:
<br>
<p>pn1180961:~/openmpi/trunk rhc$ mpirun -n 1 -host pn1180961.lanl.gov printenv
<br>
| grep LD
<br>
[pn1180961.lanl.gov:22012] [0.0] test of print_name
<br>
OLDPWD=/Users/rhc/openmpi
<br>
LD_LIBRARY_PATH=/Users/rhc/openmpi/lib:/Users/rhc/lib:/opt/local/lib:/usr/lo
<br>
cal/lib:
<br>
<p><p>But this will lockup:
<br>
<p>pn1180961:~/openmpi/trunk rhc$ mpirun -n 1 -host pn1180961 printenv | grep
<br>
LD
<br>
<p>The reason is that the hostname in this last command doesn't match the
<br>
hostname I get when I query my interfaces, so mpirun thinks it must be a
<br>
remote host - and so we stick in ssh until that times out. Which could be
<br>
quick on your machine, but takes awhile for me.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><p>On 7/18/07 7:45 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Jul 18, 2007 at 04:27:15PM +0300, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   With current trunk LD_LIBRARY_PATH is not set for ranks that are
</span><br>
<span class="quotelev2">&gt;&gt; launched on the head node. This worked previously.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Same more info. I use rsh pls.
</span><br>
<span class="quotelev1">&gt; elfit1# /home/glebn/openmpi/bin/mpirun -np 1 -H elfit1 env | grep
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; gives nothing. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The strange thing that I just found is that this one works
</span><br>
<span class="quotelev1">&gt; elfit1# /home/glebn/openmpi/bin/mpirun -np 1 -H localhost env | grep
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/home/glebn/openmpi/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1929.php">Jeff Squyres: "[OMPI devel] optional fortran datatype fixes: 1.2.4?"</a>
<li><strong>Previous message:</strong> <a href="1927.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>In reply to:</strong> <a href="1925.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1934.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Reply:</strong> <a href="1934.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
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
