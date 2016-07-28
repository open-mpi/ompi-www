<?
$subject_val = "Re: [OMPI users] Question about '--mca btl tcp,self'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 13:09:51 2014" -->
<!-- isoreceived="20140317170951" -->
<!-- sent="Mon, 17 Mar 2014 17:09:49 +0000" -->
<!-- isosent="20140317170949" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about '--mca btl tcp,self'" -->
<!-- id="5215D615-D3C4-43ED-9EAC-10C4F7389E13_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="532724B3.8020104_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about '--mca btl tcp,self'<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-17 13:09:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23876.php">christophe petit: "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<li><strong>Previous message:</strong> <a href="23874.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>In reply to:</strong> <a href="23873.php">Gus Correa: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 17, 2014, at 12:37 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In other words, does OOB pick the interface associated to the IP address
</span><br>
<span class="quotelev1">&gt; that resolves the specific node name, or does OOB have its own will and
</span><br>
<span class="quotelev1">&gt; picks whatever interface it wants?
</span><br>
<p>I'll let Ralph contribute the detail here, but it's basically the latter: the OOB has its own will and picks whatever interface it wants.
<br>
<p>But keep in mind that this is true for ALL OMPI communications (including MPI communications): the hostfile is unrelated to what interfaces are used.
<br>
<p>Early MPI implementations back in the 90's overloaded the use of the hostfile with which network interfaces were used.  Open MPI has never used that approach: we have always used the hostfile (and --host, etc.) as simply a mechanism to specify which servers/compute nodes/whatever on which to run.  Selection of interfaces to use for control messages and MPI messages are determined separately.
<br>
<p><span class="quotelev1">&gt; In a node outfitted with more than one Inifinband interface,
</span><br>
<span class="quotelev1">&gt; can one choose which one OMPI is going to use (say, if one wants to
</span><br>
<span class="quotelev1">&gt; reserve the other IB interface for IO)?
</span><br>
<p>Yes.  Each BTL typically has it's own MCA param for this kind of thing.  You might want to troll through ompi_info output to see if there's anything of interest to you. For example:
<br>
<p>&nbsp;&nbsp;ompi_info --param btl openib --level 9
<br>
<p>(the &quot;--level 9&quot; option is new somewhere during the 1.7.x series; it will cause a syntax error in the 1.6 series)
<br>
<p>will show you all the MCA params for the openib BTL.  The one you want for the openib BTL is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl_openib_if_include &lt;interfaces&gt;
<br>
<p>With the usnic BTL, we allow you to specify interfaces via two different kinds of values:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl_usnic_if_include &lt;interfaces&gt;
<br>
<p>where interfaces can be:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;usnic_X (e.g., usnic_0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CIDR network address (e.g., 192.168.0.0/16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<span class="quotelev2">&gt;&gt; Also, note that you seem to have missed a BTL: sm (shared memory).
</span><br>
<span class="quotelev1">&gt; sm is the preferred BTL to use for same-server communication.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because several FAQs skip the sm BTL, even when it would
</span><br>
<span class="quotelev1">&gt; be an appropriate/recommended choice to include in the BTL list.
</span><br>
<span class="quotelev1">&gt; For instance:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=all#selecting-components">http://www.open-mpi.org/faq/?category=all#selecting-components</a>
</span><br>
<p>This one seems to be ok.  I think the item you're referring to in that entry is an example of the ^ negation operator.
<br>
<p><span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=all#tcp-selection">http://www.open-mpi.org/faq/?category=all#tcp-selection</a>
</span><br>
<p>Fixed.  Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23876.php">christophe petit: "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<li><strong>Previous message:</strong> <a href="23874.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>In reply to:</strong> <a href="23873.php">Gus Correa: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
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
