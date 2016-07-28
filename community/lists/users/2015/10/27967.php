<?
$subject_val = "Re: [OMPI users] Relative indexing error in OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 31 22:13:47 2015" -->
<!-- isoreceived="20151101021347" -->
<!-- sent="Sat, 31 Oct 2015 19:13:41 -0700" -->
<!-- isosent="20151101021341" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Relative indexing error in OpenMPI 1.8.7" -->
<!-- id="46609FD4-44B5-4EF9-9B09-EF33A966DA23_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAB8TAZY4HqPpE-cR7E=74WNb0Z0OPGofudJewHy0csviTDMgjg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Relative indexing error in OpenMPI 1.8.7<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-31 22:13:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27968.php">waku2005: "Re: [OMPI users] Relative indexing error in OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27966.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27852.php">waku2005: "[OMPI users] Relative indexing error in OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27968.php">waku2005: "Re: [OMPI users] Relative indexing error in OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27968.php">waku2005: "Re: [OMPI users] Relative indexing error in OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for delayed response. This was indeed a bug, and I have repaired it on the master. I&#226;&#128;&#153;ll file a request to have it moved over to the upcoming 2.0 release.
<br>
<p>I&#226;&#128;&#153;m afraid it missed the deadline for 1.10.1, and there are no current plans for a 1.10.2. Likewise, we have stopped supporting the 1.8 series.
<br>
<p>Sorry for the inconvenience.
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Oct 8, 2015, at 10:32 PM, waku2005 &lt;waku2005_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear OpenMPI users
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Relative indexing error occurs in my CentOS small cluster.
</span><br>
<span class="quotelev1">&gt; What and where should I check ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Environment:
</span><br>
<span class="quotelev1">&gt; - 4node GbE cluster (CentOS 6.7)
</span><br>
<span class="quotelev1">&gt; - OpenMPI 1.8.7 (builded usin system compiler, gcc version 4.4.7 20120313 and installed /usr/local/openmpi-1.8.7) 
</span><br>
<span class="quotelev1">&gt; - use ssh without password authentification (using RSA key) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is &quot;myhosts&quot; file:
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; ensis10 slots=4
</span><br>
<span class="quotelev1">&gt; ensis12 slots=6
</span><br>
<span class="quotelev1">&gt; ensis13 slots=6
</span><br>
<span class="quotelev1">&gt; ensis14 slots=6
</span><br>
<span class="quotelev1">&gt; --------------  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Command line and error messgae: 
</span><br>
<span class="quotelev1">&gt; $ mpirun --hostfile ./myhosts -np 4 -host +n2 hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A relative host was specified, but no prior allocation has been made.
</span><br>
<span class="quotelev1">&gt; Thus, there is no way to determine the proper host to be used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -host: +n2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please see the orte_hosts man page for further information.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # In case of direct hostname specification, it works fine such as:
</span><br>
<span class="quotelev1">&gt; # [@ensis10] $ mpirun --hostfile ./myhosts -np 4 -host ensis12 hostname
</span><br>
<span class="quotelev1">&gt; # ensis12
</span><br>
<span class="quotelev1">&gt; # ensis12
</span><br>
<span class="quotelev1">&gt; # ensis12
</span><br>
<span class="quotelev1">&gt; # ensis12
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; S.Wakashima  (waku2005_at_[hidden] &lt;mailto:waku2005_at_[hidden]&gt;)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27852.php">http://www.open-mpi.org/community/lists/users/2015/10/27852.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27967/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27968.php">waku2005: "Re: [OMPI users] Relative indexing error in OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27966.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27852.php">waku2005: "[OMPI users] Relative indexing error in OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27968.php">waku2005: "Re: [OMPI users] Relative indexing error in OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27968.php">waku2005: "Re: [OMPI users] Relative indexing error in OpenMPI 1.8.7"</a>
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
