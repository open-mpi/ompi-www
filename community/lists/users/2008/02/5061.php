<?
$subject_val = "Re: [OMPI users] ofa-default-subnet-gid";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 15:36:49 2008" -->
<!-- isoreceived="20080221203649" -->
<!-- sent="Thu, 21 Feb 2008 15:36:42 -0500" -->
<!-- isosent="20080221203642" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ofa-default-subnet-gid" -->
<!-- id="E950C4A2-73BD-4AAD-85A5-19564A2D30E7_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47BDD4CC.9020500_at_princeton.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-21 15:36:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5062.php">Bill Wichser: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<li><strong>Previous message:</strong> <a href="5060.php">Bill Wichser: "[OMPI users] ofa-default-subnet-gid"</a>
<li><strong>In reply to:</strong> <a href="5060.php">Bill Wichser: "[OMPI users] ofa-default-subnet-gid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5062.php">Bill Wichser: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<li><strong>Reply:</strong> <a href="5062.php">Bill Wichser: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<li><strong>Reply:</strong> <a href="5063.php">Jeff Squyres: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here are the MCA parameters that you can use:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_if_include&quot; (current value:  
<br>
&lt;none&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comma-delimited list of HCAs/ports to be used (e.g.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;mthca0,mthca1:2&quot;; empty value means to use all  
<br>
ports found).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mutually exclusive with btl_openib_if_exclude.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_if_exclude&quot; (current value:  
<br>
&lt;none&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comma-delimited list of HCAs/ports to be excluded  
<br>
(empty value
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;means to not exclude any ports).  Mutually  
<br>
exclusive with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_if_include.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 21, 2008, at 2:45 PM, Bill Wichser wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In trying to get openmpi up and running on a new cluster, I came  
</span><br>
<span class="quotelev1">&gt; across
</span><br>
<span class="quotelev1">&gt; this error about having both of my IB switches set to the same
</span><br>
<span class="quotelev1">&gt; subnet-gid.  Snooping around on my hosts which run the opensm  
</span><br>
<span class="quotelev1">&gt; daemon, I
</span><br>
<span class="quotelev1">&gt; indeed found this to be the case in the /var/log/osm-ib[0-1].log  
</span><br>
<span class="quotelev1">&gt; files,
</span><br>
<span class="quotelev1">&gt; giving up finding it with ibstat which showed these values to be
</span><br>
<span class="quotelev1">&gt; different, at least the second part of the GID.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before I try and pursue how to actually change this value for the  
</span><br>
<span class="quotelev1">&gt; opensm
</span><br>
<span class="quotelev1">&gt; daemon, I do have a question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since both of my hosts are connected to each switch, how am I to
</span><br>
<span class="quotelev1">&gt; instruct openmpi to use port0?  I'm trying to use port0 as the MPI
</span><br>
<span class="quotelev1">&gt; network and port1 as the storage network.  Is there something that I
</span><br>
<span class="quotelev1">&gt; need to add someplace forcing connections only to some default- 
</span><br>
<span class="quotelev1">&gt; subnet-gid?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Bill
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5061/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5062.php">Bill Wichser: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<li><strong>Previous message:</strong> <a href="5060.php">Bill Wichser: "[OMPI users] ofa-default-subnet-gid"</a>
<li><strong>In reply to:</strong> <a href="5060.php">Bill Wichser: "[OMPI users] ofa-default-subnet-gid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5062.php">Bill Wichser: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<li><strong>Reply:</strong> <a href="5062.php">Bill Wichser: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<li><strong>Reply:</strong> <a href="5063.php">Jeff Squyres: "Re: [OMPI users] ofa-default-subnet-gid"</a>
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
