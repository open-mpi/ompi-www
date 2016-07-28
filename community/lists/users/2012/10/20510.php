<?
$subject_val = "Re: [OMPI users] Question on ssh search path";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 18 16:35:44 2012" -->
<!-- isoreceived="20121018203544" -->
<!-- sent="Thu, 18 Oct 2012 13:35:35 -0700" -->
<!-- isosent="20121018203535" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on ssh search path" -->
<!-- id="5B6EB5D7-1C5E-46C2-8E04-CE069D4A1DEC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="507F8A9F.2010407_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on ssh search path<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-18 16:35:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20511.php">Eric Chamberland: "[OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<li><strong>Previous message:</strong> <a href="20509.php">Siegmar Gross: "Re: [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20507.php">marco atzeri: "Re: [OMPI users] Question on ssh search path"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Take a look in orte/mca/plm/rsh/plm_rsh_component.c, the orte_plm_rsh_search function
<br>
<p><p>On Oct 17, 2012, at 9:50 PM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 10/18/2012 2:45 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trying to debug I notice a strange pattern on ssh search:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1)  ssh is only searched on the PATH directories that end with &quot;bin&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    other directories are skipped.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2) //usr/bin/ssh is not on the PATH but is searched.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Why and where is defined in the code ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any idea from where this //usr/bin/ssh is coming for ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin is one of the default posix locations for system binaries, so I would expect it is in your path.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin        yes
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev1">&gt; //usr/bin       no.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on cygwin &quot;//&quot; is always a network path and &quot;//usr/bin&quot; does not exist.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  103  321183 [main] orterun 6304 normalize_posix_path: src /home/marco/bin/ssh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  100  324353 [main] orterun 6304 normalize_posix_path: src /usr/local/bin/ssh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   99  327381 [main] orterun 6304 normalize_posix_path: src /usr/bin/ssh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   36 1805679 [main] orterun 6304 normalize_posix_path: src /home/marco/bin/ssh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   34 1807010 [main] orterun 6304 normalize_posix_path: src /usr/local/bin/ssh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   34 1808236 [main] orterun 6304 normalize_posix_path: src /usr/bin/ssh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my path is much longer but only the bin directory are searched
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   37 1810858 [main] orterun 6304 normalize_posix_path: src //usr/bin/ssh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is the anomaly
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; as immediately after the &quot;//&quot; search mpirun crashes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 703 9508968 [WNetOpenEnum] orterun 8020 cygthread::stub: thread 'WNetOpenEnum', id 0x15A0, stack_ptr 0x28BAD40
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --- Process 8020, exception 000006AB at 776BB9BC
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 41286 9550254 [main] orterun 8020 fs_info::update: Cannot get volume attributes (\??\UNC), C0000010
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I suspect this search is the culprit.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If someone is interested I put here
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://matzeri.altervista.org/works/ompi/">http://matzeri.altervista.org/works/ompi/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; all the config, check and make logs plus the ompi_info output.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Marco
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="20511.php">Eric Chamberland: "[OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<li><strong>Previous message:</strong> <a href="20509.php">Siegmar Gross: "Re: [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20507.php">marco atzeri: "Re: [OMPI users] Question on ssh search path"</a>
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
