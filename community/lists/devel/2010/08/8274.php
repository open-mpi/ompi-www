<?
$subject_val = "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 13 11:32:14 2010" -->
<!-- isoreceived="20100813153214" -->
<!-- sent="Fri, 13 Aug 2010 08:32:07 -0700" -->
<!-- isosent="20100813153207" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component" -->
<!-- id="4C656577.3000305_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201008131531.02041.keller_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-13 11:32:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8275.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="8273.php">Rainer Keller: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="8273.php">Rainer Keller: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8263.php">Graham, Richard L.: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer Keller wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; On Thursday 12 August 2010 19:09:42 Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 12, 2010, at 7:21 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there not a way to determine whether the fs is tmpfs or not?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; I don't know -- Rainer?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Well, this is semi-portable ,-]
</span><br>
<span class="quotelev1">&gt; But sure, it would work on Linux, where we'd want it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./statfs /dev/shm
</span><br>
<span class="quotelev1">&gt; --------------- statfs() output-----------------
</span><br>
<span class="quotelev1">&gt; statfs() returned the following information
</span><br>
<span class="quotelev1">&gt; about file system of path (/dev/shm):
</span><br>
<span class="quotelev1">&gt;   f_type     : TMPFS (1021994)
</span><br>
<span class="quotelev1">&gt;   f_bsize    : 4096
</span><br>
<span class="quotelev1">&gt;   f_blocks   : 723663
</span><br>
<span class="quotelev1">&gt;   f_bfree    : 723662
</span><br>
<span class="quotelev1">&gt;   f_bavail   : 723662
</span><br>
<span class="quotelev1">&gt;   f_files    : 723663
</span><br>
<span class="quotelev1">&gt;   f_ffree    : 723661
</span><br>
<span class="quotelev1">&gt;   f_fsid     : TMPFS (0x0)
</span><br>
<span class="quotelev1">&gt;   f_namelen  : 255
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (the program detects most Filesystems according to their known magic).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>I we only care about Linux then here is a simpler mechanism:
<br>
$ grep tmpfs /proc/mounts
<br>
none /dev/shm tmpfs rw 0 0
<br>
<p>Conversion from grep to fopen/fread/fclose left as an exercise for the 
<br>
reader :-)
<br>
<p>-Paul
<br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8275.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="8273.php">Rainer Keller: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="8273.php">Rainer Keller: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8263.php">Graham, Richard L.: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
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
