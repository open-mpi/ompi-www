<?
$subject_val = "Re: [OMPI devel] 1.10.0 issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 12:22:00 2015" -->
<!-- isoreceived="20150903162200" -->
<!-- sent="Thu, 3 Sep 2015 10:21:58 -0600" -->
<!-- isosent="20150903162158" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0 issue" -->
<!-- id="CAF1Cqj44f=SNrJE6utnQpy3c97PxxfR4nGLfGW7yNLhzxqDPzw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="FB48E1DA-F824-498C-8513-E1DCD9E70BBD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0 issue<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 12:21:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17942.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Previous message:</strong> <a href="17940.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17940.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17965.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I vote for Ralph's proposal.
<br>
<p>2015-09-03 10:05 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; As we discussed on the phone, I prefer the bullet #3 approach - ask RedHat
</span><br>
<span class="quotelev1">&gt; to build/distribute 1.10.0 without PSM2 support, and let Intel provide a
</span><br>
<span class="quotelev1">&gt; PSM2-enabled variant via their current proprietary distribution channel
</span><br>
<span class="quotelev1">&gt; until they can provide a &#226;&#128;&#156;clean&#226;&#128;&#157; solution to the community.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If that hasn&#226;&#128;&#153;t happened prior to a 1.10.1 release, we can then remove PSM2
</span><br>
<span class="quotelev1">&gt; at that time. I&#226;&#128;&#153;m hoping the solution will appear prior to that point :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 3, 2015, at 8:46 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph and I just chatted about this on the phone.  I think I understand
</span><br>
<span class="quotelev1">&gt; his position better now.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just to be clear/put some context in this conversation:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. PSM (aka &quot;PSM1&quot;) supports TrueScale Intel networks
</span><br>
<span class="quotelev2">&gt; &gt; 2. PSM2 supports OmniScale Intel networks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The following three solutions are more-or-less equivalent:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; a. add &quot;mtl=^psm2&quot; in the mca-params.conf file (George's proposal)
</span><br>
<span class="quotelev2">&gt; &gt; b. configure --without-psm2 (similar to George's proposal)
</span><br>
<span class="quotelev2">&gt; &gt; c. we release 10.0.1 with no PSM2 MTL (Ralph's proposal)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In all 3 cases, the OmniScale end user will not have support for their
</span><br>
<span class="quotelev1">&gt; network (and will likely fall back to TCP?).  TrueScale users are
</span><br>
<span class="quotelev1">&gt; unaffected.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Technically, there's a 4th solution (proposed by Red Hat): the distro
</span><br>
<span class="quotelev1">&gt; provides 2 different Open MPI installations -- one for (everything+PSM1),
</span><br>
<span class="quotelev1">&gt; another for (everything+PSM2).  I agree that this is (very) undesirable.
</span><br>
<span class="quotelev1">&gt; In this case, *all* users are penalized -- not just TrueScale/OmniScale
</span><br>
<span class="quotelev1">&gt; users -- because all users will now wonder &quot;Which Open MPI should I use?&quot;
</span><br>
<span class="quotelev1">&gt; (even if they're not TS/OS users, and it doesn't matter which one they use,
</span><br>
<span class="quotelev1">&gt; they still have to expend unnecessary mental energy trying to understand
</span><br>
<span class="quotelev1">&gt; why there are two, and which they should use).  Meh.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hence, we're back to the three possible &quot;more-or-less equivalent&quot;
</span><br>
<span class="quotelev1">&gt; solutions: a, b, or c.  I say &quot;more-or-less&quot; because there *is* a semantic
</span><br>
<span class="quotelev1">&gt; difference between a/b and c:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. For a/b: packagers are responsible for the solution, and also
</span><br>
<span class="quotelev1">&gt; responsible for *documenting* the solution (so that Omniscale users can
</span><br>
<span class="quotelev1">&gt; figure out why they are getting lousy performance).
</span><br>
<span class="quotelev2">&gt; &gt; 2. For c: Open MPI is responsible for the solution; we'll likely note in
</span><br>
<span class="quotelev1">&gt; NEWS that PSM2 support was removed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hence, for the &quot;let's release 1.10.1 without PSM2&quot; solution, users have
</span><br>
<span class="quotelev1">&gt; a (potentially) easier way of figuring out why they're not getting good
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That being said:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. I'm not 100% convinced that users will go to the NEWS file to figure
</span><br>
<span class="quotelev1">&gt; out why they're not getting good performance.  True, it's our
</span><br>
<span class="quotelev1">&gt; officially-sanctioned method for publishing information to users, but I
</span><br>
<span class="quotelev1">&gt; don't think that it's the first place that comes to mind when you're
</span><br>
<span class="quotelev1">&gt; diagnosing a performance problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. It seems like we have handled this kind of situation differently in
</span><br>
<span class="quotelev1">&gt; the past.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2a. E.g., when we had the hcol/ml conflict, we asked Mellanox for a
</span><br>
<span class="quotelev1">&gt; solution.  They promised to release a new libhcol that fixed the problem,
</span><br>
<span class="quotelev1">&gt; and in the meantime, told their customers to get Mellanox Open MPI from
</span><br>
<span class="quotelev1">&gt; mellanox.com that immediately fixed the problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2b. Similarly, Cisco distributed its own Cisco Open MPI when we wanted
</span><br>
<span class="quotelev1">&gt; to have libfabric support in the Open MPI v1.8.x series.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2c. This case is not entirely the same as the above two examples, but I
</span><br>
<span class="quotelev1">&gt; think it's similar in spirit: a distro is trying to be all-inclusive with
</span><br>
<span class="quotelev1">&gt; other freely-distributed software in that distro (i.e., both PSM1 and
</span><br>
<span class="quotelev1">&gt; PSM2), and a vendor-specific issue is causing a problem with that plan.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3. I therefore think we should take the same approach that we have taken
</span><br>
<span class="quotelev1">&gt; with other vendors in the past:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3a. Red Hat (and other packagers) can do whatever they need to do to
</span><br>
<span class="quotelev1">&gt; package Open MPI 1.10.0.  In this case, Red Hat is asking our advice as to
</span><br>
<span class="quotelev1">&gt; how to package it (because they include both PSM1 and PSM2 support in their
</span><br>
<span class="quotelev1">&gt; distro, and this creates a conflict in Open MPI).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ==&gt; My $0.02: we should tell Red Hat to build --without-psm2, because
</span><br>
<span class="quotelev1">&gt; then users can see that &quot;ompi_info | grep psm2&quot; will be empty.  That's a
</span><br>
<span class="quotelev1">&gt; dead giveaway that that Open MPI installation has no PSM2 support.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3b. Intel can support its customers by having an &quot;Intel Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; distribution (or whatever they want to name it, just as long as it is not
</span><br>
<span class="quotelev1">&gt; named plan/vanilla &quot;Open MPI&quot;) that is configured/built to support both
</span><br>
<span class="quotelev1">&gt; PSM1/PSM2 via their normal software distribution mechanism.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3c. If there's some solution Intel would like to push upstream to the
</span><br>
<span class="quotelev1">&gt; Open MPI community, great -- it can go through the normal review process
</span><br>
<span class="quotelev1">&gt; and be accepted upstream (i.e., just like we work every day).  That
</span><br>
<span class="quotelev1">&gt; solution can then be included in future releases.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How does that sound?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Sep 3, 2015, at 10:48 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; if I correctly read between the lines of your second point, omnipath
</span><br>
<span class="quotelev1">&gt; (PSM2) is working out of the box. I am not sure this is the case, and/or my
</span><br>
<span class="quotelev1">&gt; extrapolation might be incorrect.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; if I understood correctly, psm2 is a new feature.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; from a distro point of view, that could be a new package (known not to
</span><br>
<span class="quotelev1">&gt; support PSM), or a mpirun-psm2 wrapper, or a release note (e.g. use --mca
</span><br>
<span class="quotelev1">&gt; mtl ^psm or a psm2 param file)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I still do not get how removing PSM2 makes things better
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (and the same result can be achieved by configuring with --without-psm2)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Thursday, September 3, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I guess I didn&#226;&#128;&#153;t make it clear in my prior comment, so let me try
</span><br>
<span class="quotelev1">&gt; again. I understand about dlopen and the fix that George proposed - we had
</span><br>
<span class="quotelev1">&gt; internally discussed this as well. However, the questions that raises are:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1. how does the distro (Michal) decide which PSM module to disable by
</span><br>
<span class="quotelev1">&gt; default in their package?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2. how does the user &#226;&#128;&#156;discover&#226;&#128;&#157; that their fabric has automatically
</span><br>
<span class="quotelev1">&gt; been disabled, especially since this has never been the case before?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I&#226;&#128;&#153;ll raise the procedural question at our next telecon. I certainly
</span><br>
<span class="quotelev1">&gt; take no pleasure out of generating releases, so if we have a better
</span><br>
<span class="quotelev1">&gt; solution, I&#226;&#128;&#153;m all for it!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Sep 3, 2015, at 5:55 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I agree with what George says.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; AFAIK, Red Hat builds Open MPI support for dlopen, so the config file
</span><br>
<span class="quotelev1">&gt; option is probably suitable.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; However, I have to admit that I resent the fact that PSM's poor
</span><br>
<span class="quotelev1">&gt; upgrade path design is forcing both the Open MPI and libfabric communities
</span><br>
<span class="quotelev1">&gt; to have similar confusing conversations (e.g., see
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/ofiwg/libfabric/issues/1258#issuecomment-137426271">https://github.com/ofiwg/libfabric/issues/1258#issuecomment-137426271</a>).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Specifically: because of the design of PSM1/PSM2, both Open MPI and
</span><br>
<span class="quotelev1">&gt; libfabric will have to adjust their configury and use dlopen/function
</span><br>
<span class="quotelev1">&gt; pointer indirection to &quot;solve&quot; the problem of supporting both PSM1 and PSM2.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Does that seem weird to anyone else?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; IMNSHO, if you have to have extremely confusing conversations in
</span><br>
<span class="quotelev1">&gt; multiple software communities explaining your configury,
</span><br>
<span class="quotelev1">&gt; function-pointer-indirection code (i.e., PR
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/ofiwg/libfabric/pull/1259">https://github.com/ofiwg/libfabric/pull/1259</a>), compilation, and linking
</span><br>
<span class="quotelev1">&gt; scheme to upgrade to a new library, you're doing it wrong.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Sep 3, 2015, at 7:19 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi Michael,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I might have missed some context when proposing this solution. As
</span><br>
<span class="quotelev1">&gt; Gilles suggested if you build Open MPI without support for dlopen
</span><br>
<span class="quotelev1">&gt; (configure option --disable-dlopen) this simple solution will not work
</span><br>
<span class="quotelev1">&gt; because the symbol conflict issue is generated deep inside the constructors
</span><br>
<span class="quotelev1">&gt; of the 2 libraries.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Yes, the &quot;mtl = ^psm&quot; (or ^psm2 depending on which one you want to
</span><br>
<span class="quotelev1">&gt; disable) should go in the openmpi-mca-params.conf that gets installed in
</span><br>
<span class="quotelev1">&gt; the $(sysconfigdir).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; George.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Thu, Sep 3, 2015 at 5:14 AM, Michal Schmidt &lt;mschmidt_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [I apologize for not threading the email properly. I was not
</span><br>
<span class="quotelev1">&gt; subscribed
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; before and found the conversation in the web archive.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I am the one who discovered the PSM vs. PSM2 library conflict and
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; proposed the temporary workaround of having two builds of the openmpi
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; package.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 3. Except if the distro builds OMPI statically, I see no reason to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; have 2 build of OMPI due to conflicting symbols between two shared
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; libraries that OMPI MCA load willingly. Why a simple &quot;mtl = ^psm&quot; in
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the OMPI system wide configuration file is not enough to solve the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; issue?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thank you for this suggestion. It would go into
</span><br>
<span class="quotelev1">&gt; openmpi-mca-params.conf,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; right? I will try it.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Michal
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17927.php">http://www.open-mpi.org/community/lists/devel/2015/09/17927.php</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17928.php">http://www.open-mpi.org/community/lists/devel/2015/09/17928.php</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17931.php">http://www.open-mpi.org/community/lists/devel/2015/09/17931.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17933.php">http://www.open-mpi.org/community/lists/devel/2015/09/17933.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17937.php">http://www.open-mpi.org/community/lists/devel/2015/09/17937.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17939.php">http://www.open-mpi.org/community/lists/devel/2015/09/17939.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17940.php">http://www.open-mpi.org/community/lists/devel/2015/09/17940.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17941/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17942.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Previous message:</strong> <a href="17940.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17940.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17965.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
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
