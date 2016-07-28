<?
$subject_val = "Re: [OMPI users] Environment variables [documentation]";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 27 09:58:37 2012" -->
<!-- isoreceived="20120227145837" -->
<!-- sent="Mon, 27 Feb 2012 07:58:29 -0700" -->
<!-- isosent="20120227145829" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Environment variables [documentation]" -->
<!-- id="8EC52966-5E0C-41EC-B470-852BCEB668CE_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F4B6C41.6040205_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Environment variables [documentation]<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-27 09:58:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18562.php">yanyg_at_[hidden]: "[OMPI users] orted daemon no found! --- environment not passed to slave nodes?"</a>
<li><strong>Previous message:</strong> <a href="18560.php">Paul Kapinos: "[OMPI users] Environment variables [documentation]"</a>
<li><strong>In reply to:</strong> <a href="18560.php">Paul Kapinos: "[OMPI users] Environment variables [documentation]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 27, 2012, at 4:42 AM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI developer,
</span><br>
<span class="quotelev1">&gt; here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpi-environmental-variables">http://www.open-mpi.org/faq/?category=running#mpi-environmental-variables</a>
</span><br>
<span class="quotelev1">&gt; are enlisted four envvars Open MPI set for every process. We use they for some scripting and thank you for providing they.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But simple &quot;mpiexec -np 1 env | grep OMPI&quot; brings lotz more enviers.
</span><br>
<p>Yes, we set quite a few more, but those are intended solely for internal use and are not guaranteed. The list on the web site only identifies a set that are guaranteed to be provided.
<br>
<p><span class="quotelev1">&gt; These are interesting for us:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) OMPI_COMM_WORLD_LOCAL_SIZE - seem to contain the number of processes which are running on the specific node, see also
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/07/6054.php">http://www.open-mpi.org/community/lists/users/2008/07/6054.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this envvar also &quot;stable&quot; as OMPI_COMM_WORLD_LOCAL_RANK is? (This would make sense as it looks like the  OMPI_COMM_WORLD_SIZE, OMPI_COMM_WORLD_RANK pair.)
</span><br>
<p>Yes, and I'll add it to the page
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If yes, maybe it also should be documented in the Wiki page.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) OMPI_COMM_WORLD_NODE_RANK - is that just a double of OMPI_COMM_WORLD_LOCAL_RANK ?
</span><br>
<p>No - the &quot;local rank&quot; is your rank on the node within your own job. The &quot;node rank&quot; is your rank on the node overall. The two differ when you do a comm_spawn. For example, suppose you have two ranks from your initial job on a node, and then comm_spawn three additional ranks. Their values would look like this:
<br>
<p>job/rank   local_rank    node_rank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0/0                0                       0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0/1                1                       1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1/0                0                       2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1/1                1                       3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1/2                2                       4
<br>
<p>Again, I'll add it to the page
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes,
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
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
<li><strong>Next message:</strong> <a href="18562.php">yanyg_at_[hidden]: "[OMPI users] orted daemon no found! --- environment not passed to slave nodes?"</a>
<li><strong>Previous message:</strong> <a href="18560.php">Paul Kapinos: "[OMPI users] Environment variables [documentation]"</a>
<li><strong>In reply to:</strong> <a href="18560.php">Paul Kapinos: "[OMPI users] Environment variables [documentation]"</a>
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
