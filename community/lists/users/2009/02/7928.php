<?
$subject_val = "Re: [OMPI users] Handling output of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 04:55:50 2009" -->
<!-- isoreceived="20090202095550" -->
<!-- sent="Mon, 2 Feb 2009 10:55:45 +0100" -->
<!-- isosent="20090202095545" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Handling output of processes" -->
<!-- id="9b0da5ce0902020155k7b6e3b8j227ecd322186cfd6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DEEC1D31-67C3-4EE4-85FF-C6E52492FF45_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Handling output of processes<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-02 04:55:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7929.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7927.php">Reuti: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="7924.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7929.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7929.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7933.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7935.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
The new options are great stuff!
<br>
Following your suggestion, i downloaded and installed
<br>
<p><a href="http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz</a>
<br>
<p>and tested the new options. (i have a simple cluster of
<br>
8 machines over tcp). Not everything worked as specified, though:
<br>
* timestamp-output : works
<br>
* xterm : doesn't work completely -
<br>
&nbsp;&nbsp;comma-separated rank list:
<br>
&nbsp;&nbsp;Only for the local processes a xterm is opened. The other processes
<br>
&nbsp;&nbsp;(the ones on remote machines) only output to the stdout of the
<br>
calling window.
<br>
&nbsp;&nbsp;(Just to be sure i started my own script for opening separate xterms
<br>
- that did work for the remoties, too)
<br>
<p>&nbsp;&nbsp;If a '-1' is given instead of a list of ranks, it fails (locally &amp;
<br>
with remotes):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[jody_at_localhost neander]$  mpirun -np 4 --xterm -1 ./MPITest
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte-odls-base:xterm-rank-out-of-bounds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from the file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;help-odls-base.txt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;But I couldn't find any file matching that name.  Sorry!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun was unable to start the specified application as it
<br>
encountered an error
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;on node localhost. More information may be available above.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
* output-filename : doesn't work here:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[jody_at_localhost neander]$  mpirun -np 4 --output-filename gnagna ./MPITest
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[jody_at_localhost neander]$ ls -l gna*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-rw-r--r-- 1 jody morpho 549 2009-02-02 09:07 gnagna.%10lu
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;There is output from the processes on remote machines on stdout, but none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from the local ones.
<br>
<p><p>A question about installing: i installed the usual way (configure,
<br>
make all install),
<br>
but the new man-files apparently weren't copied to their destination:
<br>
If i do 'man mpirun' i get shown the contents of an old man-file
<br>
(without the new options).
<br>
I had to do '  less /opt//openmpi-1.4a1r20394/share/man/man1/mpirun.1'
<br>
to see them.
<br>
<p>About the xterm-option : when the application ends all xterms are
<br>
closed immediately.
<br>
(when doing things 'by hand' i used the -hold option for xterm)
<br>
Would it be possible to add this feature for your xterm option?
<br>
Perhaps by adding a '!' at the end of the rank list?
<br>
<p>About orte_iof: with the new version it works, but no matter which
<br>
rank i specify,
<br>
it only prints out rank0's output:
<br>
&nbsp;&nbsp;&nbsp;[jody_at_localhost ~]$ orte-iof --pid 31049   --rank 4 --stdout
<br>
&nbsp;&nbsp;&nbsp;[localhost]I am #0/9 before the barrier
<br>
<p><p><p>Thanks
<br>
<p>Jody
<br>
<p>On Sun, Feb 1, 2009 at 10:49 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I'm afraid we discovered a bug in optimized builds with r20392. Please use
</span><br>
<span class="quotelev1">&gt; any tarball with r20394 or above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the confusion
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 1, 2009, at 5:27 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 31, 2009, at 11:39 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For anyone following this thread:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have completed the IOF options discussed below. Specifically, I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; added the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * a new &quot;timestamp-output&quot; option that timestamp's each line of output
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * a new &quot;output-filename&quot; option that redirects each proc's output to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; separate rank-named file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * a new &quot;xterm&quot; option that redirects the output of the specified ranks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to a separate xterm window.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can obtain a copy of the updated code at:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sweet stuff.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that the URL/tarball that Ralph cites is a nightly snapshot and will
</span><br>
<span class="quotelev2">&gt;&gt; expire after a while -- we only keep the most 5 recent nightly tarballs
</span><br>
<span class="quotelev2">&gt;&gt; available.  You can find Ralph's new IOF stuff in any 1.4a1 nightly tarball
</span><br>
<span class="quotelev2">&gt;&gt; after the one he cited above.  Note that the last part of the tarball name
</span><br>
<span class="quotelev2">&gt;&gt; refers to the subversion commit number (which increases monotonically); any
</span><br>
<span class="quotelev2">&gt;&gt; 1.4 nightly snapshot tarball beyond &quot;r20392&quot; will contain this new IOF
</span><br>
<span class="quotelev2">&gt;&gt; stuff.  Here's where to get our nightly snapshot tarballs:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Don't read anything into the &quot;1.4&quot; version number -- we've just bumped the
</span><br>
<span class="quotelev2">&gt;&gt; version number internally to be different than the current stable series
</span><br>
<span class="quotelev2">&gt;&gt; (1.3).  We haven't yet branched for the v1.4 series; hence, &quot;1.4a1&quot;
</span><br>
<span class="quotelev2">&gt;&gt; currently refers to our development trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7929.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7927.php">Reuti: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="7924.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7929.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7929.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7933.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7935.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
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
