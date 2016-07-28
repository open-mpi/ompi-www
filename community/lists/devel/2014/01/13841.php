<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 14:39:29 2014" -->
<!-- isoreceived="20140122193929" -->
<!-- sent="Wed, 22 Jan 2014 11:39:25 -0800" -->
<!-- isosent="20140122193925" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64" -->
<!-- id="CAAvDA16-uuvX3y=e_mMoDOM_MkbGqUckYvPVs2oTutQovTfxew_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="22E8A011-DB73-4360-ACEE-94E20A7B2205_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 14:39:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13842.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MIPS64 atomics tests fail"</a>
<li><strong>Previous message:</strong> <a href="13840.php">Larry Baker: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="13838.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13848.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>Reply:</strong> <a href="13848.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Attached is the requested output with the addition of &quot;-mca
<br>
grpcomm_base_verbose 5&quot;.
<br>
I have also attached a 2nd output with the further addition of &quot;-mca
<br>
oob_tcp_if_include lo&quot; to ensure that this is not related to the firewall
<br>
issues I've seen on other hosts.
<br>
<p>I have use of this host until 14:30 PST today, and then lose it for 12
<br>
hours.
<br>
So, tests of the next tarball won't start until after 2:30am - which
<br>
probably means 10am.
<br>
<p>-Paul
<br>
<p><p>On Wed, Jan 22, 2014 at 7:34 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Weird - everything looks completely normal. Can you add -mca
</span><br>
<span class="quotelev1">&gt; grpcomm_base_verbose 5 to your cmd line?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2014, at 1:38 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Following-up as promised:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Output from an --enable-debug build is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 21, 2014 at 11:25 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, this is familiar. See:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13182.php">http://www.open-mpi.org/community/lists/devel/2013/11/13182.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I understand correctly, the thread ended with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 03 December 2013, Sylvestre Ledru wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FYI, Debian has stopped supporting ia64 for its next release....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I stopped working on that issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, I have access to a Linux/IA64 system and my trials with
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.7.4rc2r30361 appear to hang, much as Sylvestre had reported w/
</span><br>
<span class="quotelev2">&gt;&gt; 1.6.5.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am atatching output from a build W/O --enable debug for the command:
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -mca plm_base_verbose 5 -mca ras_base_verbose 5 -mca
</span><br>
<span class="quotelev2">&gt;&gt; rmaps_base_verbose 5 -mca ess_base_verbose 5 -np 1 ./ring_c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will follow-up with an --enable-debug build when possible.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;  &lt;log.txt.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900


</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13841/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13841/log.txt.bz2">log.txt.bz2</a>
</ul>
<!-- attachment="log.txt.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13841/log-incl-lo.txt.bz2">log-incl-lo.txt.bz2</a>
</ul>
<!-- attachment="log-incl-lo.txt.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13842.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MIPS64 atomics tests fail"</a>
<li><strong>Previous message:</strong> <a href="13840.php">Larry Baker: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="13838.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13848.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>Reply:</strong> <a href="13848.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
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
