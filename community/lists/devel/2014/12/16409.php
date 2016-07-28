<?
$subject_val = "Re: [OMPI devel] RTLD_GLOBAL question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  2 13:42:20 2014" -->
<!-- isoreceived="20141202184220" -->
<!-- sent="Tue, 2 Dec 2014 18:41:59 +0000" -->
<!-- isosent="20141202184159" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTLD_GLOBAL question" -->
<!-- id="1D6337DB-8335-4E8A-8435-39CDAAC04A7D_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="93AF5A89-1584-48F3-9597-829858B78CF2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTLD_GLOBAL question<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-02 13:41:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16410.php">Nathan Hjelm: "[OMPI devel] RFC: update opal lifo class and add fifo class"</a>
<li><strong>Previous message:</strong> <a href="16408.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework"</a>
<li><strong>In reply to:</strong> <a href="16406.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16413.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Reply:</strong> <a href="16413.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See <a href="https://github.com/open-mpi/ompi/pull/298">https://github.com/open-mpi/ompi/pull/298</a> for a fix.
<br>

<br>
There's 2 commits on that PR -- the 2nd is just a cleanup.  The real fix is the 1st commit, here:
<br>

<br>
<a href="https://github.com/jsquyres/ompi/commit/a736d83fb9a7b27986a008a2cda6eb1fea839fb3">https://github.com/jsquyres/ompi/commit/a736d83fb9a7b27986a008a2cda6eb1fea839fb3</a>
<br>

<br>
If someone can confirm that this works for them, we can bring it to master.
<br>

<br>
It may have the side effect of &quot;fixing / working around&quot; (by coincidence) the SLURM bug (we all agree that the Right solution is to have SLURM fix it upstream, but I think this will put us back in the case of &quot;working by accident / despite the SLURM bug&quot;).
<br>

<br>

<br>

<br>
On Dec 2, 2014, at 10:59 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; I'm able to replicate Edgar's problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm investigating...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 2, 2014, at 10:39 AM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the mailing list refused to let me add the config.log file, since it is too large, I can forward the output to you directly as well (as I did to Jeff).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I honestly have not looked into the configure logic, I can just tell that OPAL_HAVE_LTDL_ADVISE is not set on my linux system for master, but is set on the 1.8 series (1.8 series checkout was from Nov. 20, so if something changed in between the result might be different).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 12/2/2014 9:27 AM, Artem Polyakov wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2014-12-02 20:59 GMT+06:00 Edgar Gabriel &lt;gabriel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:gabriel_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   didn't want to interfere with this thread, although I have a similar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   issue, since I have the solution nearly fully cooked up. But anyway,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   this last email gave the hint on why we have suddenly the problem in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ompio:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   it looks like OPAL_HAVE_LTDL_ADVISE (at least on my systems) is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   set anymore, so the entire section is being skipped. I double
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   checked that with the 1.8 branch, it goes through the section, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   not with master.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi, Edgar.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Both master and ompi-release (isn't it 1.8?!) are equal in sence of my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fix. Something else!? I'd like to see config.log too but will look into
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it only tomorrow.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also I want to add that SLURM PMI2 communicates with local slurmstepd's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and doesn't need any authentification. All PMI1 processes otherwise
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicate to the srun process and thus need libslurm services for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication and authentification.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   On 12/2/2014 7:56 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Looks like I was totally lying in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       <a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16381.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16381.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16381.php">http://www.open-mpi.org/community/lists/devel/2014/12/16381.php</a>&gt; (where
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       I said we should not use RTLD_GLOBAL).  We *do* use RTLD_GLOBAL:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       <a href="https://github.com/open-mpi/__ompi/blob/master/opal/mca/__base/mca_base_component___repository.c#L124">https://github.com/open-mpi/__ompi/blob/master/opal/mca/__base/mca_base_component___repository.c#L124</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       &lt;<a href="https://github.com/open-mpi/ompi/blob/master/opal/mca/base/mca_base_component_repository.c#L124">https://github.com/open-mpi/ompi/blob/master/opal/mca/base/mca_base_component_repository.c#L124</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       This ltdl advice object is passed to lt_dlopen() for all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       components.  My mistake; sorry.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       So the idea that using RTLD_GLOBAL will fix this SLURM bug is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       incorrect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       I believe someone said earlier in the thread that adding the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       right -llibs to the configure line will solve the issue, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       that sounds correct to me.  If there's a missing symbol because
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       the SLURM libraries are not automatically pulling in the right
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       dependent libraries, then *if* we put a workaround in OMPI to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       fix this issue, then the right workaround is to add the relevant
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -llibs when that component is linked.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       *If* you add that workaround (which is a whole separate
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       discussion), I would suggest adding a configure.m4 test to see
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if adding the additional -llibs are necessary.  Perhaps
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       AC_LINK_IFELSE looking for a symbol, and then if that fails,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       AC_LINK_IFELSE again with the additional -llibs to see if that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       works.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Or something like that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       On Dec 2, 2014, at 6:38 AM, Artem Polyakov &lt;artpol84_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       &lt;mailto:artpol84_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Agree. First you should check is to what value
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           OPAL_HAVE_LTDL_ADVISE is set. If it is zero - very probably
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           this is the same bug as mine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           2014-12-02 17:33 GMT+06:00 Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           &lt;mailto:rhc_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           It does look similar - question is: why didn&#226;&#128;&#153;t this fix the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           problem? Will have to investigate.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               On Dec 2, 2014, at 3:17 AM, Artem Polyakov
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               &lt;artpol84_at_[hidden] &lt;mailto:artpol84_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               2014-12-02 17:13 GMT+06:00 Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Hmmm&#226;&#128;&#166;if that is true, then it didn&#226;&#128;&#153;t fix this problem as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               it is being reported in the master.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               I had this problem on my laptop installation. You can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               check my report it was detailed enough and see if you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               hitting the same issue. My fix was also included into
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               1.8 branch. I am not sure that this is the same issue
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               but they looks similar.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   On Dec 1, 2014, at 9:40 PM, Artem Polyakov
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   &lt;artpol84_at_[hidden] &lt;mailto:artpol84_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   I think this might be related to the configuration
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   problem I was fixing with Jeff few months ago. Refer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   <a href="https://github.com/open-mpi/__ompi/pull/240">https://github.com/open-mpi/__ompi/pull/240</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   &lt;<a href="https://github.com/open-mpi/ompi/pull/240">https://github.com/open-mpi/ompi/pull/240</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   2014-12-02 10:15 GMT+06:00 Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   If it isn&#226;&#128;&#153;t too much trouble, it would be good to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   confirm that it remains broken. I strongly suspect
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   it is based on Moe&#226;&#128;&#153;s comments.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Obviously, other people are making this work. For
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Intel MPI, all you do is point it at libpmi and they
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   can run. However, they do explicitly dlopen it in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   their code, and I don&#226;&#128;&#153;t know what flags they might
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   pass when they do so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   If necessary, I suppose we could follow that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   pattern. In other words, rather than specifically
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   linking the &#226;&#128;&#156;s1&#226;&#128;&#157; component to libpmi, instead
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   require that the user point us to a pmi library via
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   an MCA param, then explicitly dlopen that library
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   with RTLD_GLOBAL. This avoids the issues cited by
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Jeff, but resolves the pmi linkage problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       On Dec 1, 2014, at 8:09 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;__&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       $ srun --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       slurm 2.6.6-VENDOR_PROVIDED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       $ srun --mpi=pmi2 -n 1 ~/hw
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       I am 0 / 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       $ srun -n 1 ~/hw
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       /csc/home1/gouaillardet/hw: symbol lookup error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       /usr/lib64/slurm/auth_munge.__so: undefined
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       symbol: slurm_verbose
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       srun: error: slurm_receive_msg: Zero Bytes were
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       transmitted or received
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       srun: error: slurm_receive_msg[10.0.3.15]: Zero
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Bytes were transmitted or received
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       srun: error: soleil: task 0: Exited with exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       code 127
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       $ ldd /usr/lib64/slurm/auth_munge.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             linux-vdso.so.1 =&gt;  (0x00007fff54478000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             libmunge.so.2 =&gt; /usr/lib64/libmunge.so.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       (0x00007f744760f000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             libpthread.so.0 =&gt; /lib64/libpthread.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       (0x00007f74473f1000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             libc.so.6 =&gt; /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       (0x00007f744705d000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       (0x0000003bf5400000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       now, if i reling auth_munge.so so it depends on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       libslurm :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       $ srun -n 1 ~/hw
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       srun: symbol lookup error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       /usr/lib64/slurm/auth_munge.__so: undefined
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       symbol: slurm_auth_get_arg_desc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       i can give a try to the latest slurm if needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       On 2014/12/02 12:56, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           Out of curiosity - how are you testing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           these? I have more current versions of Slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           and would like to test the observations there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               On Dec 1, 2014, at 7:49 PM, Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Gouaillardet
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;__&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               I d like to make a step back ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               i previously tested with slurm 2.6.0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               and it complained about the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               slurm_verbose symbol that is defined in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               libslurm.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               so with slurm 2.6.0, RTLD_GLOBAL or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               relinking is ok
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               now i tested with slurm 2.6.6 and it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               complains about the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               slurm_auth_get_arg_desc symbol, and this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               symbol is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               defined in any dynamic library. it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               internally defined in the static
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               libcommon.a library, which is used to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               build the slurm binaries.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               as far as i understand, auth_munge.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               can only be invoked from a slurm binary,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               which means it cannot be invoked from an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               mpi application
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               even if it is linked with libslurm,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               libpmi, ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               that looks like a slurm design issue
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               that the slurm folks will take care of.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               On 2014/12/02 12:33, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   Another option is to simply add the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   -lslurm -lauth flags to the pmix/s1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   component as this is the only place
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   that requires it, and it won&#226;&#128;&#153;t hurt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   anything to do so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       On Dec 1, 2014, at 6:03 PM,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Gilles Gouaillardet
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;__&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;mailto:gilles.gouaillardet@__iferc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                          wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       FWIW, you can read my analysis
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       of what is going wrong at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       <a href="http://www.open-mpi.org/__community/lists/pmix-devel/__2014/11/0293.php">http://www.open-mpi.org/__community/lists/pmix-devel/__2014/11/0293.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/community/lists/pmix-devel/2014/11/0293.php">http://www.open-mpi.org/community/lists/pmix-devel/2014/11/0293.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/__community/lists/pmix-devel/__2014/11/0293.php">http://www.open-mpi.org/__community/lists/pmix-devel/__2014/11/0293.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/community/lists/pmix-devel/2014/11/0293.php">http://www.open-mpi.org/community/lists/pmix-devel/2014/11/0293.php</a>&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/__community/lists/pmix-devel/__2014/11/0293.php">http://www.open-mpi.org/__community/lists/pmix-devel/__2014/11/0293.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/community/lists/pmix-devel/2014/11/0293.php">http://www.open-mpi.org/community/lists/pmix-devel/2014/11/0293.php</a>&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/__community/lists/pmix-devel/__2014/11/0293.php">http://www.open-mpi.org/__community/lists/pmix-devel/__2014/11/0293.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/community/lists/pmix-devel/2014/11/0293.php">http://www.open-mpi.org/community/lists/pmix-devel/2014/11/0293.php</a>&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       bottom line, i agree this is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       slurm issue (slurm plugin should
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       depend
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       on libslurm, but they do not, yet)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       a possible workaround would be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       to make the pmi component a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &quot;proxy&quot; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       dlopen with RTLD_GLOBAL the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &quot;real&quot; component in which the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       job is done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       that being said, the impact is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       quite limited (no direct launch
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       in slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       with pmi1, but pmi2 works fine)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       so it makes sense not to work around
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       someone else problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       and that being said, configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       could detect this broken pmi1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       and not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       build pmi1 support or print a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       user friendly error message if
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       pmi1 is used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       any thoughts ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       On 2014/12/02 7:47, Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                           Ok, if the problem is moot,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                           great.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                           (sidenote: this is moot, so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                           ignore this if you want:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                           with this explanation, I'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                           still not sure how
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                           RTLD_GLOBAL fixes the issue)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                           On Dec 1, 2014, at 5:15 PM,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                           Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                           &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                           &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                           &lt;mailto:rhc_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                           &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                              wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Easy enough to explain.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               We link libpmi into the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               pmix/s1 component. This
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               library is missing the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               linkage to libslurm that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               contains the linkage to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               libauth where munge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               resides. So when we call
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               a PMI function, libpmi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               references a call to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               munge for authentication
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               and hits an &#226;&#128;&#156;unresolved
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               symbol&#226;&#128;&#157; error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Moe acknowledges the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               error is in Slurm and is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               fixing the linkages so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               this problem goes away
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   On Dec 1, 2014, at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   2:13 PM, Jeff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   Squyres (jsquyres)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   On Dec 1, 2014, at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   5:07 PM, Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;mailto:rhc_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       FWIW: It&#226;&#128;&#153;s
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       Slurm&#226;&#128;&#153;s pmi-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       library that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       isn&#226;&#128;&#153;t linked
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       correctly
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       against its
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       dependencies
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       (the pmi-2 one
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       is correct).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       Moe is aware of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       the problem and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       fixing it on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       their side. This
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       won&#226;&#128;&#153;t help
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       existing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       installations
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       until they
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       upgrade, but I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       tend to agree
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       with Jeff about
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       not fixing other
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       people&#226;&#128;&#153;s problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   Can you explain what
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   is happening?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   I ask because I'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   not sure I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   understand the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   problem such that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   using RTLD_GLOBAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   would fix it.  I.e.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   even if libpmi1.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   isn't linked against
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   its dependencies
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   properly, that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   shouldn't cause a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   problem if OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   components A and B
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   are both linked
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   against libpmi1.so,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   and then A is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   loaded, and then B
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   is loaded.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   ...or perhaps we can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   just discuss this on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   the call tomorrow?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   For corporate legal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   <a href="http://www.cisco.com/web/__about/doing_business/legal/__cri/">http://www.cisco.com/web/__about/doing_business/legal/__cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;<a href="http://www.cisco.com/web/__about/doing_business/legal/__cri/">http://www.cisco.com/web/__about/doing_business/legal/__cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   _________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;mailto:devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;<a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   <a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16383.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16383.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16383.php">http://www.open-mpi.org/community/lists/devel/2014/12/16383.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;<a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16383.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16383.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16383.php">http://www.open-mpi.org/community/lists/devel/2014/12/16383.php</a>&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               _________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               &lt;mailto:devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               &lt;<a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               <a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16384.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16384.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16384.php">http://www.open-mpi.org/community/lists/devel/2014/12/16384.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               &lt;<a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16384.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16384.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16384.php">http://www.open-mpi.org/community/lists/devel/2014/12/16384.php</a>&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       _________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;mailto:devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;mailto:devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;mailto:devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       <a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16386.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16386.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16386.php">http://www.open-mpi.org/community/lists/devel/2014/12/16386.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16386.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16386.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16386.php">http://www.open-mpi.org/community/lists/devel/2014/12/16386.php</a>&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16386.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16386.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16386.php">http://www.open-mpi.org/community/lists/devel/2014/12/16386.php</a>&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16386.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16386.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16386.php">http://www.open-mpi.org/community/lists/devel/2014/12/16386.php</a>&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   _________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   &lt;mailto:devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   &lt;<a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   <a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16387.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16387.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16387.php">http://www.open-mpi.org/community/lists/devel/2014/12/16387.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   &lt;<a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16387.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16387.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16387.php">http://www.open-mpi.org/community/lists/devel/2014/12/16387.php</a>&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               _________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               <a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16388.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16388.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16388.php">http://www.open-mpi.org/community/lists/devel/2014/12/16388.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           _________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           <a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16389.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16389.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16389.php">http://www.open-mpi.org/community/lists/devel/2014/12/16389.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       _________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       <a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16390.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16390.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16390.php">http://www.open-mpi.org/community/lists/devel/2014/12/16390.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   _________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   <a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16391.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16391.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16391.php">http://www.open-mpi.org/community/lists/devel/2014/12/16391.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   _________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   <a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16393.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16393.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16393.php">http://www.open-mpi.org/community/lists/devel/2014/12/16393.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               _________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               <a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16395.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16395.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16395.php">http://www.open-mpi.org/community/lists/devel/2014/12/16395.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               _________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               <a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16396.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16396.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16396.php">http://www.open-mpi.org/community/lists/devel/2014/12/16396.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           _________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           <a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16397.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16397.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16397.php">http://www.open-mpi.org/community/lists/devel/2014/12/16397.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           _________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           <a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16398.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16398.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16398.php">http://www.open-mpi.org/community/lists/devel/2014/12/16398.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Edgar Gabriel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Associate Professor
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Parallel Software Technologies Lab <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Department of Computer Science          University of Houston
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   _________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Subscription: <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16400.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16400.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16400.php">http://www.open-mpi.org/community/lists/devel/2014/12/16400.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16404.php">http://www.open-mpi.org/community/lists/devel/2014/12/16404.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;&gt; Associate Professor
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev2">&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16405.php">http://www.open-mpi.org/community/lists/devel/2014/12/16405.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16410.php">Nathan Hjelm: "[OMPI devel] RFC: update opal lifo class and add fifo class"</a>
<li><strong>Previous message:</strong> <a href="16408.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework"</a>
<li><strong>In reply to:</strong> <a href="16406.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16413.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Reply:</strong> <a href="16413.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
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
