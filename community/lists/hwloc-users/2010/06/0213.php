<?
$subject_val = "Re: [hwloc-users] hwloc sockets support on solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 23 16:27:35 2010" -->
<!-- isoreceived="20100623202735" -->
<!-- sent="Wed, 23 Jun 2010 16:27:25 -0400" -->
<!-- isosent="20100623202725" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc sockets support on solaris" -->
<!-- id="3AC3A1E1-BEDA-4587-AD4B-4EC9D83BF89E_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C226B29.6070503_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc sockets support on solaris<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-23 16:27:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0214.php">Brice Goglin: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>Previous message:</strong> <a href="0212.php">Brice Goglin: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>In reply to:</strong> <a href="0212.php">Brice Goglin: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0214.php">Brice Goglin: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>Reply:</strong> <a href="0214.php">Brice Goglin: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hm.  We should be.  Here's the hwloc plugin code for setting CPU affinity (it's static because it's invoked by function pointer):
<br>
<p>static int module_set(opal_paffinity_base_cpu_set_t mask)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i, ret = OPAL_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_cpuset_t set;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_t *t = &amp;mca_paffinity_hwloc_component.topology;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;set = hwloc_cpuset_alloc();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_cpuset_zero(set);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; ((unsigned int) i) &lt; OPAL_PAFFINITY_BITMASK_T_NUM_BITS; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_PAFFINITY_CPU_ISSET(i, mask) &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i &lt; mca_paffinity_hwloc_component.cpuset_max_size) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_cpuset_cpu(set, i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (0 != hwloc_set_cpubind(*t, set, 0)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = OPAL_ERR_IN_ERRNO;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_cpuset_free(set);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return ret;
<br>
}
<br>
<p><p>On Jun 23, 2010, at 4:14 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I see this in the solaris binding core:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   if (hwloc_cpuset_weight(hwloc_set) != 1) {
</span><br>
<span class="quotelev1">&gt;     errno = EXDEV;
</span><br>
<span class="quotelev1">&gt;     return -1;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI doesn't get this error ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 23/06/2010 21:56, Terry Dontje a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Does hwloc think it supports binding processes to sockets or multiple cpus?  I am asking because I believe there are no current Solaris accessors that support this (processor_bind only binds a pid or a set of pids to a *single* processor).  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I bring this up because in testing OMPI with hwloc support it looks like -bind-to-socket is acting like -bind-to-core on Solaris.  I believe the issue is hwloc should be returning an error to tell OMPI it cannot bind-to-socket or multiple cpus at that.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ATT2811223.gif&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev2">&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ATT2811225.gif&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev2">&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0214.php">Brice Goglin: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>Previous message:</strong> <a href="0212.php">Brice Goglin: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>In reply to:</strong> <a href="0212.php">Brice Goglin: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0214.php">Brice Goglin: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>Reply:</strong> <a href="0214.php">Brice Goglin: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
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
