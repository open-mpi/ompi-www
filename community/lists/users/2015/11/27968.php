<?
$subject_val = "Re: [OMPI users] Relative indexing error in OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  1 05:08:46 2015" -->
<!-- isoreceived="20151101100846" -->
<!-- sent="Sun, 1 Nov 2015 19:08:43 +0900" -->
<!-- isosent="20151101100843" -->
<!-- name="waku2005" -->
<!-- email="waku2005_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Relative indexing error in OpenMPI 1.8.7" -->
<!-- id="CAB8TAZa7r8GVmx4Ag_c0sC3WHE6uoOLdqa30VGd1NRVUd4n7rA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="46609FD4-44B5-4EF9-9B09-EF33A966DA23_at_open-mpi.org" -->
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
<strong>From:</strong> waku2005 (<em>waku2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-01 05:08:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27969.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27967.php">Ralph Castain: "Re: [OMPI users] Relative indexing error in OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27967.php">Ralph Castain: "Re: [OMPI users] Relative indexing error in OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
<p>Thanks for your reply, I found another way of host indexing and can specify
<br>
hosts as I hoped.
<br>
I will wait the bug fix in later version of OpenMPI.
<br>
<p>Sincerely yours
<br>
S.Wakashima  (waku2005_at_[hidden])
<br>
<p><p>2015-11-01 11:13 GMT+09:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Sorry for delayed response. This was indeed a bug, and I have repaired it
</span><br>
<span class="quotelev1">&gt; on the master. I&#226;&#128;&#153;ll file a request to have it moved over to the upcoming
</span><br>
<span class="quotelev1">&gt; 2.0 release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m afraid it missed the deadline for 1.10.1, and there are no current
</span><br>
<span class="quotelev1">&gt; plans for a 1.10.2. Likewise, we have stopped supporting the 1.8 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the inconvenience.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 8, 2015, at 10:32 PM, waku2005 &lt;waku2005_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; - OpenMPI 1.8.7 (builded usin system compiler, gcc version 4.4.7 20120313
</span><br>
<span class="quotelev1">&gt; and installed /usr/local/openmpi-1.8.7)
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
<span class="quotelev1">&gt; S.Wakashima  (waku2005_at_[hidden])
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27852.php">http://www.open-mpi.org/community/lists/users/2015/10/27852.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27967.php">http://www.open-mpi.org/community/lists/users/2015/10/27967.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
S.Wakashima  (waku2005_at_[hidden])
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27968/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27969.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27967.php">Ralph Castain: "Re: [OMPI users] Relative indexing error in OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27967.php">Ralph Castain: "Re: [OMPI users] Relative indexing error in OpenMPI 1.8.7"</a>
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
