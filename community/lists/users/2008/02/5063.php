<?
$subject_val = "Re: [OMPI users] ofa-default-subnet-gid";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 18:57:27 2008" -->
<!-- isoreceived="20080221235727" -->
<!-- sent="Thu, 21 Feb 2008 15:57:10 -0800" -->
<!-- isosent="20080221235710" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ofa-default-subnet-gid" -->
<!-- id="F949F8DF-9D54-4CF5-A84B-C9DDB7E77888_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E950C4A2-73BD-4AAD-85A5-19564A2D30E7_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] ofa-default-subnet-gid<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-21 18:57:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5064.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Previous message:</strong> <a href="5062.php">Bill Wichser: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<li><strong>In reply to:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 21, 2008, at 12:36 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Here are the MCA parameters that you can use:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MCA btl: parameter &quot;btl_openib_if_include&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  Comma-delimited list of HCAs/ports to be used (e.g.
</span><br>
<span class="quotelev1">&gt;                  &quot;mthca0,mthca1:2&quot;; empty value means to use all  
</span><br>
<span class="quotelev1">&gt; ports found).
</span><br>
<span class="quotelev1">&gt;                  Mutually exclusive with btl_openib_if_exclude.
</span><br>
<span class="quotelev1">&gt;         MCA btl: parameter &quot;btl_openib_if_exclude&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  Comma-delimited list of HCAs/ports to be excluded  
</span><br>
<span class="quotelev1">&gt; (empty value
</span><br>
<span class="quotelev1">&gt;                  means to not exclude any ports).  Mutually  
</span><br>
<span class="quotelev1">&gt; exclusive with
</span><br>
<span class="quotelev1">&gt;                  btl_openib_if_include.
</span><br>
<p>These parameters are [upcoming] v1.3 only -- they do not exist in the  
<br>
v1.2 series.
<br>
<p>(more below)
<br>
<p><span class="quotelev1">&gt; On Feb 21, 2008, at 2:45 PM, Bill Wichser wrote:
</span><br>
<p><span class="quotelev2">&gt;&gt; In trying to get openmpi up and running on a new cluster, I came  
</span><br>
<span class="quotelev2">&gt;&gt; across
</span><br>
<span class="quotelev2">&gt;&gt; this error about having both of my IB switches set to the same
</span><br>
<span class="quotelev2">&gt;&gt; subnet-gid.  Snooping around on my hosts which run the opensm  
</span><br>
<span class="quotelev2">&gt;&gt; daemon, I
</span><br>
<span class="quotelev2">&gt;&gt; indeed found this to be the case in the /var/log/osm-ib[0-1].log  
</span><br>
<span class="quotelev2">&gt;&gt; files,
</span><br>
<span class="quotelev2">&gt;&gt; giving up finding it with ibstat which showed these values to be
</span><br>
<span class="quotelev2">&gt;&gt; different, at least the second part of the GID.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Before I try and pursue how to actually change this value for the  
</span><br>
<span class="quotelev2">&gt;&gt; opensm
</span><br>
<span class="quotelev2">&gt;&gt; daemon, I do have a question.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since both of my hosts are connected to each switch, how am I to
</span><br>
<span class="quotelev2">&gt;&gt; instruct openmpi to use port0?  I'm trying to use port0 as the MPI
</span><br>
<span class="quotelev2">&gt;&gt; network and port1 as the storage network.  Is there something that I
</span><br>
<span class="quotelev2">&gt;&gt; need to add someplace forcing connections only to some default- 
</span><br>
<span class="quotelev2">&gt;&gt; subnet-gid?
</span><br>
<p>The v1.3 series will have the parameters that George mentioned above;  
<br>
those give you fine-grained control about which HCAs and ports you are  
<br>
using.
<br>
<p>In the v1.2 series, you cannot explicitly control which hcas/ports you  
<br>
are using.  Instead, you can only limit the *number* of active ports  
<br>
that Open MPI will use:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_max_btls&quot; (current value:  
<br>
&quot;-1&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Maximum number of HCA ports to use (-1 = use all
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;available, otherwise must be &gt;= 1)
<br>
<p>Open MPI starts with the first port on the first interface and goes  
<br>
upward until it finds max_btls of active ports.  This is admittedly  
<br>
imperfect, but it was only somewhat recently that someone asked for  
<br>
explicit control over which hcas/ports to use.  Sorry...  :-\
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5064.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Previous message:</strong> <a href="5062.php">Bill Wichser: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<li><strong>In reply to:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI users] ofa-default-subnet-gid"</a>
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
