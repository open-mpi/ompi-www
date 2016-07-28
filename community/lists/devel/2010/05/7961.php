<?
$subject_val = "[OMPI devel] /dev/shm usage (was: Very poor performance with btl sm...)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 08:45:40 2010" -->
<!-- isoreceived="20100518124540" -->
<!-- sent="Tue, 18 May 2010 08:45:34 -0400" -->
<!-- isosent="20100518124534" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] /dev/shm usage (was: Very poor performance with btl sm...)" -->
<!-- id="E26C578B-BAEC-413C-B959-3A341A77DDBD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1005181001031.3698_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> [OMPI devel] /dev/shm usage (was: Very poor performance with btl sm...)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-18 08:45:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7962.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="7960.php">Terry Dontje: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="7958.php">Sylvain Jeaugey: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7965.php">Jeff Squyres: "Re: [OMPI devel] /dev/shm usage (was: Very poor performance with btlsm...)"</a>
<li><strong>Reply:</strong> <a href="7965.php">Jeff Squyres: "Re: [OMPI devel] /dev/shm usage (was: Very poor performance with btlsm...)"</a>
<li><strong>Reply:</strong> <a href="7966.php">Paul H. Hargrove: "Re: [OMPI devel] /dev/shm usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and I talked about this on the phone a bit this morning.  There's several complicating factors in using /dev/shm (aren't there always? :-) ).
<br>
<p>0. Note that anything in /dev/shm will need to have session-directory-like semantics: there needs to be per-user and per-job characteristics (e.g., if the same user launches multiple jobs on the same node, etc.).
<br>
<p>1. It is not necessarily a good idea to put the entire session directory in /dev/shm.  It's not just the shared memory files that go in the session directory; there's a handful of other meta data files that go in there as well.  Those files don't take up much space, but it still feels wrong to put anything other that shared memory files in there.  Indeed, checkpoint files and filem files can go in there -- these can eat up lots of space (RAM).  
<br>
<p>2. /dev/shm may not be configured right, and/or there are possible /dev/shm configurations where you *do* use twice the memory (Ralph cited an example of a nameless organization that had exactly this problem -- we don't know if this was a misconfiguration or whether it was done on purpose for some reason).  I don't know if kernel version comes into play here, too (e.g., if older Linux kernel versions did double the memory, or somesuch).  So it's not necessarily a slam dunk that you *always* want to do this.
<br>
<p>3. The session directory has &quot;best effort&quot; cleanup at the end of the job:
<br>
<p>- MPI jobs (effectively) rm -rf the session directory
<br>
- The orted (effectively) rm -rf's the session directory
<br>
<p>But neither of these are *guaranteed* -- for example, if the resource manager kills the job with extreme prejudice, the session directory can be left around.  Where possible, ORTE tries to put the session directory in a resource manager job-specific-temp directory so that the resource manager itself whacks the session directory at the end of the job.  But this isn't always the case.
<br>
<p>So the session directory has 2 levels of attempted cleanup (MPI procs and orted), and sometimes a 3rd (the resource manager).
<br>
<p>3a. If the session directory is in /dev/shm, we get the 2 levels but definitely not the 3rd (note: I don't think that putting the session directory is a good idea, per #1 -- I'm just being complete).
<br>
<p>3b. If the shared memory files are outside the session directory, we don't get any of the additional cleanup without adding some additional infrastructure -- possibly into orte/util/session_dir.* (e.g., add /dev/shm as a secondary session directory root).  This would allow us to effect session directory-like semantics inside /dev/shm. 
<br>
<p>4. But even with 2 levels of possible cleanup, not having the resource manager cleanup can be quite disastrous if shared memory is left around after a job is forcibly terminated.  Sysadmins can do stuff like rm -rf /dev/shm (or whatever) between jobs to guarantee cleanup, but it would be extra steps required outside of OMPI.  
<br>
<p>--&gt; This seems to imply that using /dev/shm should not be default behavior.
<br>
<p>-----
<br>
<p>All this being said, it seems like 3b is a reasonable way to go forward: extend orte/util/session_dir.* to allow for multiple session directory roots (somehow -- exact mechanism TBD).  Then both the MPI processes and the orted will try to clean up both the real session directory and /dev/shm.  Both roots will use the same per user/per job kinds of characteristics that the session dir already has.  
<br>
<p>Then we can extend the MCA param orte_tmpdir_base to accept a comma-delimited list of roots.  It still defaults to /tmp, but a sysadmin can set it to be /tmp,/dev/shm (or whatever) if they want to use /dev/shm.  OMPI will still do &quot;best effort&quot; cleanup of /dev/shm, but it's the sysadmin's responsibility to *guarantee* its cleanup after a job ends, etc.
<br>
<p>Thoughts?
<br>
<p><p>On May 18, 2010, at 4:09 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; I would go further on this : when available, putting the session directory
</span><br>
<span class="quotelev1">&gt; in a tmpfs filesystem (e.g. /dev/shm) should give you the maximum
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, when using /dev/shm instead of the local /tmp filesystem, I get a
</span><br>
<span class="quotelev1">&gt; consistent 1-5us latency improvement on a barrier at 32 cores (on a single
</span><br>
<span class="quotelev1">&gt; node). So it may not be noticeable for everyone, but it seems faster in
</span><br>
<span class="quotelev1">&gt; all cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 17 May 2010, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Entry looks good, but could probably use an additional sentence or two like:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On diskless nodes running Linux, use of /dev/shm may be an option if
</span><br>
<span class="quotelev2">&gt; &gt; supported by your distribution.  This will use an in-memory file system for
</span><br>
<span class="quotelev2">&gt; &gt; the session directory, but will NOT result in a doubling of the memory
</span><br>
<span class="quotelev2">&gt; &gt; consumed for the shared memory file (i.e. file system &quot;blocks&quot; and memory
</span><br>
<span class="quotelev2">&gt; &gt; &quot;pages&quot; share a single instance).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; How's this?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     <a href="http://www.open-mpi.org/faq/?category=sm#poor-sm-btl-performance">http://www.open-mpi.org/faq/?category=sm#poor-sm-btl-performance</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What's the advantage of /dev/shm?  (I don't know anything about /dev/shm)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On May 17, 2010, at 4:08 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I agree with Paul on the fact that a FAQ update would be great on this
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; subject. /dev/shm seems a good place to put the temporary files (when
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; available, of course).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Putting files in /dev/shm also showed better performance on our systems,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; even with /tmp on a local disk.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Sun, 16 May 2010, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; If I google &quot;ompi sm btl performance&quot; the top match is
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  <a href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I scanned the entire page from top to bottom and don't see any questions
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the form
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Why is SM performance slower than ...?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The words &quot;NFS&quot;, &quot;network&quot;, &quot;file system&quot; or &quot;filesystem&quot; appear nowhere
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; on
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the page.  The closest I could find is
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 7. Where is the file that sm will mmap in?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The file will be in the OMPI session directory, which is typically
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; something like /tmp/openmpi-sessions-myusername_at_mynodename* . The file
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; itself will have the name shared_mem_pool.mynodename. For example, the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; full
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; path could be
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-myusername_at_node0_0/1543/1/shared_mem_pool.node0.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; To place the session directory in a non-default location, use the MCA
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; parameter orte_tmpdir_base.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; which says nothing about where one should or should not place the session
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; directory.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Not having read the entire FAQ from start to end, I will not contradict
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Ralph's claim that the &quot;your SM performance might suck if you put the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; session
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; directory on a remote filesystem&quot; FAQ entry does exist, but I will assert
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; that I did not find it in the SM section of the FAQ.  I tried google on
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; &quot;ompi
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; session directory&quot; and &quot;ompi orte_tmpdir_base&quot; and still didn't find
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; whatever
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; entry Ralph is talking about.  So, I think the average user with no clue
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; about the relationship between the SM BLT and the session directory would
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; need some help finding it.  Therefore, I still feel an FAQ entry in the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; SM
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; category is warranted, even if it just references whatever entry Ralph is
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; referring to.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; We have had a FAQ on this for a long time...problem is, nobody reads it
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; :-/
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Glad you found the problem!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On May 14, 2010, at 3:15 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Oskar Enoksson wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Christopher Samuel wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] Very poor performance with btl sm on twin
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   nehalem servers with Mellanox ConnectX installed
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   &lt;D45958078CD65C429557B4C5F492B6A60770E51F_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 13/05/10 20:56, Oskar Enoksson wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The problem is that I get very bad performance unless I
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; explicitly exclude the &quot;sm&quot; btl and I can't figure out why.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Recently someone reported issues which were traced back to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the fact that the files that sm uses for mmap() were in a
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tmp which was NFS mounted; changing the location where their
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; files were kept to another directory with the orte_tmpdir_base
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MCA parameter fixed that issue for them.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Could it be similar for yourself ?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cheers,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Chris
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; That was exactly right, as you guessed these are diskless nodes that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mounts the root filesystem over NFS.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Setting orte_tmpdir_base to /dev/shm and btl_sm_num_fifos=9 and then
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; running mpi_stress on eight cores measures speeds of 1650MB/s for both
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 1MB messages and 1600MB/s for 10kB messages.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /Oskar
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Sounds like a new FAQ entry is warranted.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Future Technologies Group                 Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; HPC Research Department                   Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group                 Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; HPC Research Department                   Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7962.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="7960.php">Terry Dontje: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="7958.php">Sylvain Jeaugey: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7965.php">Jeff Squyres: "Re: [OMPI devel] /dev/shm usage (was: Very poor performance with btlsm...)"</a>
<li><strong>Reply:</strong> <a href="7965.php">Jeff Squyres: "Re: [OMPI devel] /dev/shm usage (was: Very poor performance with btlsm...)"</a>
<li><strong>Reply:</strong> <a href="7966.php">Paul H. Hargrove: "Re: [OMPI devel] /dev/shm usage"</a>
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
