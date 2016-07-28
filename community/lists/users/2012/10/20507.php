<?
$subject_val = "Re: [OMPI users] Question on ssh search path";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 18 00:50:44 2012" -->
<!-- isoreceived="20121018045044" -->
<!-- sent="Thu, 18 Oct 2012 06:50:39 +0200" -->
<!-- isosent="20121018045039" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on ssh search path" -->
<!-- id="507F8A9F.2010407_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9EEE27BA-51D5-47DF-90E1-38C93D0BBF90_at_open-mpi.org" -->
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
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-18 00:50:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20508.php">Iliev, Hristo: "Re: [OMPI users] openmpi-1.6.2 and registerable memory"</a>
<li><strong>Previous message:</strong> <a href="20506.php">Alan Wild: "[OMPI users] openmpi-1.6.2 and registerable memory"</a>
<li><strong>In reply to:</strong> <a href="20505.php">Ralph Castain: "Re: [OMPI users] Question on ssh search path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20510.php">Ralph Castain: "Re: [OMPI users] Question on ssh search path"</a>
<li><strong>Reply:</strong> <a href="20510.php">Ralph Castain: "Re: [OMPI users] Question on ssh search path"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/18/2012 2:45 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trying to debug I notice a strange pattern on ssh search:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1)  ssh is only searched on the PATH directories that end with &quot;bin&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     other directories are skipped.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) //usr/bin/ssh is not on the PATH but is searched.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Why and where is defined in the code ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; any idea from where this //usr/bin/ssh is coming for ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/bin is one of the default posix locations for system binaries, so I would expect it is in your path.
</span><br>
<p>/usr/bin        yes
<br>
but
<br>
//usr/bin       no.
<br>
<p>on cygwin &quot;//&quot; is always a network path and &quot;//usr/bin&quot; does not exist.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   103  321183 [main] orterun 6304 normalize_posix_path: src /home/marco/bin/ssh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   100  324353 [main] orterun 6304 normalize_posix_path: src /usr/local/bin/ssh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    99  327381 [main] orterun 6304 normalize_posix_path: src /usr/bin/ssh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    36 1805679 [main] orterun 6304 normalize_posix_path: src /home/marco/bin/ssh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    34 1807010 [main] orterun 6304 normalize_posix_path: src /usr/local/bin/ssh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    34 1808236 [main] orterun 6304 normalize_posix_path: src /usr/bin/ssh
</span><br>
<p>my path is much longer but only the bin directory are searched
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt;    37 1810858 [main] orterun 6304 normalize_posix_path: src //usr/bin/ssh
</span><br>
<p>this is the anomaly
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as immediately after the &quot;//&quot; search mpirun crashes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 703 9508968 [WNetOpenEnum] orterun 8020 cygthread::stub: thread 'WNetOpenEnum', id 0x15A0, stack_ptr 0x28BAD40
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- Process 8020, exception 000006AB at 776BB9BC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 41286 9550254 [main] orterun 8020 fs_info::update: Cannot get volume attributes (\??\UNC), C0000010
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I suspect this search is the culprit.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If someone is interested I put here
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://matzeri.altervista.org/works/ompi/">http://matzeri.altervista.org/works/ompi/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all the config, check and make logs plus the ompi_info output.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Marco
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20508.php">Iliev, Hristo: "Re: [OMPI users] openmpi-1.6.2 and registerable memory"</a>
<li><strong>Previous message:</strong> <a href="20506.php">Alan Wild: "[OMPI users] openmpi-1.6.2 and registerable memory"</a>
<li><strong>In reply to:</strong> <a href="20505.php">Ralph Castain: "Re: [OMPI users] Question on ssh search path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20510.php">Ralph Castain: "Re: [OMPI users] Question on ssh search path"</a>
<li><strong>Reply:</strong> <a href="20510.php">Ralph Castain: "Re: [OMPI users] Question on ssh search path"</a>
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
