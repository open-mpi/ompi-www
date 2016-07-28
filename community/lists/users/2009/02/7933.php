<?
$subject_val = "Re: [OMPI users] Handling output of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 07:58:07 2009" -->
<!-- isoreceived="20090202125807" -->
<!-- sent="Mon, 2 Feb 2009 05:57:54 -0700" -->
<!-- isosent="20090202125754" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Handling output of processes" -->
<!-- id="EDC75E5A-907E-4F0E-A518-810013AE1A30_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0902020155k7b6e3b8j227ecd322186cfd6_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-02 07:57:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7934.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7932.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>In reply to:</strong> <a href="7928.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7935.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great feedback - thanks!
<br>
<p>I'll look into these and see what's going on. We had tested things on  
<br>
a couple of systems, but it sounds like maybe there are some system- 
<br>
specific issues we are encountering. Let me explore a little to see  
<br>
what might be happening.
<br>
<p>Ralph
<br>
<p>On Feb 2, 2009, at 2:55 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph
</span><br>
<span class="quotelev1">&gt; The new options are great stuff!
</span><br>
<span class="quotelev1">&gt; Following your suggestion, i downloaded and installed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and tested the new options. (i have a simple cluster of
</span><br>
<span class="quotelev1">&gt; 8 machines over tcp). Not everything worked as specified, though:
</span><br>
<span class="quotelev1">&gt; * timestamp-output : works
</span><br>
<span class="quotelev1">&gt; * xterm : doesn't work completely -
</span><br>
<span class="quotelev1">&gt;  comma-separated rank list:
</span><br>
<span class="quotelev1">&gt;  Only for the local processes a xterm is opened. The other processes
</span><br>
<span class="quotelev1">&gt;  (the ones on remote machines) only output to the stdout of the
</span><br>
<span class="quotelev1">&gt; calling window.
</span><br>
<span class="quotelev1">&gt;  (Just to be sure i started my own script for opening separate xterms
</span><br>
<span class="quotelev1">&gt; - that did work for the remoties, too)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If a '-1' is given instead of a list of ranks, it fails (locally &amp;
</span><br>
<span class="quotelev1">&gt; with remotes):
</span><br>
<span class="quotelev1">&gt;     [jody_at_localhost neander]$  mpirun -np 4 --xterm -1 ./MPITest
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;         orte-odls-base:xterm-rank-out-of-bounds
</span><br>
<span class="quotelev1">&gt;     from the file:
</span><br>
<span class="quotelev1">&gt;         help-odls-base.txt
</span><br>
<span class="quotelev1">&gt;     But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     mpirun was unable to start the specified application as it
</span><br>
<span class="quotelev1">&gt; encountered an error
</span><br>
<span class="quotelev1">&gt;     on node localhost. More information may be available above.
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; * output-filename : doesn't work here:
</span><br>
<span class="quotelev1">&gt;    [jody_at_localhost neander]$  mpirun -np 4 --output-filename  
</span><br>
<span class="quotelev1">&gt; gnagna ./MPITest
</span><br>
<span class="quotelev1">&gt;    [jody_at_localhost neander]$ ls -l gna*
</span><br>
<span class="quotelev1">&gt;    -rw-r--r-- 1 jody morpho 549 2009-02-02 09:07 gnagna.%10lu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    There is output from the processes on remote machines on stdout,  
</span><br>
<span class="quotelev1">&gt; but none
</span><br>
<span class="quotelev1">&gt;    from the local ones.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A question about installing: i installed the usual way (configure,
</span><br>
<span class="quotelev1">&gt; make all install),
</span><br>
<span class="quotelev1">&gt; but the new man-files apparently weren't copied to their destination:
</span><br>
<span class="quotelev1">&gt; If i do 'man mpirun' i get shown the contents of an old man-file
</span><br>
<span class="quotelev1">&gt; (without the new options).
</span><br>
<span class="quotelev1">&gt; I had to do '  less /opt//openmpi-1.4a1r20394/share/man/man1/mpirun.1'
</span><br>
<span class="quotelev1">&gt; to see them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; About the xterm-option : when the application ends all xterms are
</span><br>
<span class="quotelev1">&gt; closed immediately.
</span><br>
<span class="quotelev1">&gt; (when doing things 'by hand' i used the -hold option for xterm)
</span><br>
<span class="quotelev1">&gt; Would it be possible to add this feature for your xterm option?
</span><br>
<span class="quotelev1">&gt; Perhaps by adding a '!' at the end of the rank list?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; About orte_iof: with the new version it works, but no matter which
</span><br>
<span class="quotelev1">&gt; rank i specify,
</span><br>
<span class="quotelev1">&gt; it only prints out rank0's output:
</span><br>
<span class="quotelev1">&gt;   [jody_at_localhost ~]$ orte-iof --pid 31049   --rank 4 --stdout
</span><br>
<span class="quotelev1">&gt;   [localhost]I am #0/9 before the barrier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Feb 1, 2009 at 10:49 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid we discovered a bug in optimized builds with r20392.  
</span><br>
<span class="quotelev2">&gt;&gt; Please use
</span><br>
<span class="quotelev2">&gt;&gt; any tarball with r20394 or above.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the confusion
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 1, 2009, at 5:27 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 31, 2009, at 11:39 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For anyone following this thread:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have completed the IOF options discussed below. Specifically, I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; added the following:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * a new &quot;timestamp-output&quot; option that timestamp's each line of  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; output
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * a new &quot;output-filename&quot; option that redirects each proc's  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; output to a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; separate rank-named file.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * a new &quot;xterm&quot; option that redirects the output of the specified  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ranks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to a separate xterm window.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can obtain a copy of the updated code at:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sweet stuff.  :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that the URL/tarball that Ralph cites is a nightly snapshot  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expire after a while -- we only keep the most 5 recent nightly  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tarballs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available.  You can find Ralph's new IOF stuff in any 1.4a1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nightly tarball
</span><br>
<span class="quotelev3">&gt;&gt;&gt; after the one he cited above.  Note that the last part of the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tarball name
</span><br>
<span class="quotelev3">&gt;&gt;&gt; refers to the subversion commit number (which increases  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; monotonically); any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.4 nightly snapshot tarball beyond &quot;r20392&quot; will contain this new  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IOF
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stuff.  Here's where to get our nightly snapshot tarballs:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Don't read anything into the &quot;1.4&quot; version number -- we've just  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bumped the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version number internally to be different than the current stable  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; series
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (1.3).  We haven't yet branched for the v1.4 series; hence, &quot;1.4a1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently refers to our development trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="7934.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7932.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>In reply to:</strong> <a href="7928.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7935.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
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
