<?
$subject_val = "Re: [OMPI users] ofa-default-subnet-gid";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 16:49:27 2008" -->
<!-- isoreceived="20080221214927" -->
<!-- sent="Thu, 21 Feb 2008 16:49:18 -0500" -->
<!-- isosent="20080221214918" -->
<!-- name="Bill Wichser" -->
<!-- email="bill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ofa-default-subnet-gid" -->
<!-- id="47BDF1DE.50203_at_princeton.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Bill Wichser (<em>bill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-21 16:49:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5063.php">Jeff Squyres: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<li><strong>Previous message:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<li><strong>In reply to:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5063.php">Jeff Squyres: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks George!
<br>
<p>I've added:
<br>
--mca btl_openib_if_include mthca0
<br>
--mca btl_openib_warn_default_gid_prefix 0
<br>
<p>and hopefully it'll do the right thing without any warnings.
<br>
<p>Bill
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Here are the MCA parameters that you can use:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          MCA btl: parameter &quot;btl_openib_if_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                   Comma-delimited list of HCAs/ports to be used (e.g.
</span><br>
<span class="quotelev1">&gt;                   &quot;mthca0,mthca1:2&quot;; empty value means to use all ports 
</span><br>
<span class="quotelev1">&gt; found).
</span><br>
<span class="quotelev1">&gt;                   Mutually exclusive with btl_openib_if_exclude.
</span><br>
<span class="quotelev1">&gt;          MCA btl: parameter &quot;btl_openib_if_exclude&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                   Comma-delimited list of HCAs/ports to be excluded 
</span><br>
<span class="quotelev1">&gt; (empty value
</span><br>
<span class="quotelev1">&gt;                   means to not exclude any ports).  Mutually exclusive with
</span><br>
<span class="quotelev1">&gt;                   btl_openib_if_include.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 21, 2008, at 2:45 PM, Bill Wichser wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In trying to get openmpi up and running on a new cluster, I came across
</span><br>
<span class="quotelev2">&gt;&gt; this error about having both of my IB switches set to the same
</span><br>
<span class="quotelev2">&gt;&gt; subnet-gid.  Snooping around on my hosts which run the opensm daemon, I
</span><br>
<span class="quotelev2">&gt;&gt; indeed found this to be the case in the /var/log/osm-ib[0-1].log files,
</span><br>
<span class="quotelev2">&gt;&gt; giving up finding it with ibstat which showed these values to be
</span><br>
<span class="quotelev2">&gt;&gt; different, at least the second part of the GID.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Before I try and pursue how to actually change this value for the opensm
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
<span class="quotelev2">&gt;&gt; need to add someplace forcing connections only to some 
</span><br>
<span class="quotelev2">&gt;&gt; default-subnet-gid?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Bill
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5063.php">Jeff Squyres: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<li><strong>Previous message:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<li><strong>In reply to:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5063.php">Jeff Squyres: "Re: [OMPI users] ofa-default-subnet-gid"</a>
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
