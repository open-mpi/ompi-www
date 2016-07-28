<?
$subject_val = "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find -lrdmacm on 9184";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 15:14:45 2009" -->
<!-- isoreceived="20091217201445" -->
<!-- sent="Thu, 17 Dec 2009 13:14:40 -0700" -->
<!-- isosent="20091217201440" -->
<!-- name="tom fogal" -->
<!-- email="tfogal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find -lrdmacm on 9184" -->
<!-- id="auto-000021448033_at_sci.utah.edu" -->
<!-- inreplyto="c7269c9e0912171207m650e2e74n73f9d8cd41768a05_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find -lrdmacm on 9184<br>
<strong>From:</strong> tom fogal (<em>tfogal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-17 15:14:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11589.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11587.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Maybe in reply to:</strong> <a href="11551.php">tom fogal: "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find -lrdmacm on 9184"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Simon Su &lt;newsgroup4ssu_at_[hidden]&gt; writes:
<br>
<span class="quotelev1">&gt; Hi Tom,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;hello world&quot; MPI program also won't compile if
</span><br>
<span class="quotelev1">&gt; librdmacm-devel-1.0.8-5.el5 is not installed. I have asked the person
</span><br>
<span class="quotelev1">&gt; who maintain the openmpi package on how they were compiled. My guess
</span><br>
<span class="quotelev1">&gt; is librdmacm-devel-1.0.8-5.el5 may need to be added as dependency
</span><br>
<span class="quotelev1">&gt; package for openmpi010208-gcc-devel-1.2.8-8.cses.5.PU_IAS.5 package
</span><br>
<span class="quotelev1">&gt; (where I got my openmpi installation) to solve the problem and to
</span><br>
<span class="quotelev1">&gt; verify that we have the correct openmpi compilation.
</span><br>
<p>Yes, I agree, from this message &amp;&amp; your last (to OMPI: Simon mentioned
<br>
that the issue goes away if he installs librdmacm-devel), it sounds
<br>
like librdmacm-devel is a &quot;build-dep&quot;, but the openmpi-devel package
<br>
needs it as a &quot;dep&quot;.
<br>
<p>Anyway, I'll leave it up to you to forward the error/conclusion to
<br>
whomever your upstream is.  Thanks for digging into this,
<br>
<p>-tom
<br>
<p><span class="quotelev1">&gt; On Wed, Dec 16, 2009 at 5:45 PM, tom fogal &lt;tfogal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff sent this reply to our inquiry yesterday.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Simon -- can you give it a read?  In particular, validating you've got
</span><br>
<span class="quotelev2">&gt; &gt; the right mpic++ sounds like a good idea.  We're also curious if a
</span><br>
<span class="quotelev2">&gt; &gt; simple &quot;hello world&quot; MPI program can link using gcc + the flags from
</span><br>
<span class="quotelev2">&gt; &gt; mpic++ -show.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -tom
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------- Forwarded Message
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; In-Reply-To: &lt;auto-000021432141_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Wed, 16 Dec 2009 17:20:35 -0500
</span><br>
<span class="quotelev2">&gt; &gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cc: VisIt Developers &lt;visit-developers_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot
</span><br>
<span class="quotelev2">&gt; &gt;        find-lrdmacm on 9184
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It depends on how Open MPI was built.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If Open MPI was built without plugins (i.e., all the plugins are slurped up
</span><br>
<span class="quotelev2">&gt; &gt; into libmpi and friends), then yes, applications need to link against
</span><br>
<span class="quotelev2">&gt; &gt; librdmacm to use the RDMA CM mode of OpenFabrics transport.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If Open MPI was built with plugins (which is the default), then apps don't
</span><br>
<span class="quotelev2">&gt; &gt; need to link against librdmacm because the only use of rdmacm is in an Open
</span><br>
<span class="quotelev2">&gt; &gt; MPI plugin, and that plugin was linked against librdmacm.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Make sense?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That being said, the output from mpic++ --showme should give you something
</span><br>
<span class="quotelev2">&gt; &gt; that is directly compile-/link-able.  So it is odd if mpic++ is showing you
</span><br>
<span class="quotelev2">&gt; &gt; something that can't (or shouldn't?) be done.  Did a -L argument get lost
</span><br>
<span class="quotelev2">&gt; &gt; somewhere, perchance?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does linking MPI applications with mpic++ work properly, or does it result
</span><br>
<span class="quotelev2">&gt; &gt; in the same error?  If it results in the same error, then perhaps something
</span><br>
<span class="quotelev2">&gt; &gt; has changed since Open MPI was installed...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; All this being said, two other random points:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Ensure that you're using the &quot;right&quot; mpic++.  I.e., make sure it matches
</span><br>
<span class="quotelev2">&gt; &gt; the version/installation of Open MPI that you're trying to use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. If you don't link with the librdmacm, you're probably not losing any
</span><br>
<span class="quotelev2">&gt; &gt; important functionality unless you have an iWarp-based cluster (that's the
</span><br>
<span class="quotelev2">&gt; &gt; only transport that *needs* librdmacm).  IB-based networks can use
</span><br>
<span class="quotelev2">&gt; &gt; librdmacm, but don't *need* it (it's only used for making initial
</span><br>
<span class="quotelev2">&gt; &gt; connections, so using librdmacm or not has no implications on overall MPI
</span><br>
<span class="quotelev2">&gt; &gt; performance).  It's still odd that mpic++ wants it and it can't be found,
</span><br>
<span class="quotelev2">&gt; &gt; though...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does that helps?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 15, 2009, at 11:11 PM, tom fogal wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Simon Su &lt;newsgroup4ssu_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi Tom,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I am using the standard openmpi package that run on all the cluster
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; machines here at Princeton. So, maybe I shouldn't touch openmpi. But,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; removing -lrdmacm from the MPI_LIBS line in the machinename.conf file
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; worked.  Any implication from doing this?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The only thing it could possibly do is disable RDMA for you.  However,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; since removing it did not produce any undefined symbol errors, my guess
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is that your OpenMPI isn't using RDMA anyway.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; There might be an OpenMPI bug here, though.  I've cc'd the OpenMPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt; community to see if they have any input.  As a summary for them: Simon
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is trying to build our MPI-enabled application.  A script which tries
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to automate this adds the output of &quot;mpic++ -show&quot;.  His build then
</span><br>
<span class="quotelev3">&gt; &gt; &gt; failed because it attempted to link against librdmacm, which does not
</span><br>
<span class="quotelev3">&gt; &gt; &gt; exist in his normal search paths (or maybe at all).  Is it possible
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that `mpic++ -show' includes/adds &quot;-lrdmacm&quot; even when OpenMPI is not
</span><br>
<span class="quotelev3">&gt; &gt; &gt; itself using the library?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -tom
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Tue, Dec 15, 2009 at 8:46 PM, tom fogal &lt;tfogal_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Simon Su &lt;newsgroup4ssu_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; I am getting this error message while building 9184.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [snip]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; -lz -lm -ldl  -lpthread -L/usr/local/openmpi/1.3.3/gcc/x86_64/lib64
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; -lmpi_cxx -lmpi -lopen-rte -lopen-pal -lrdmacm -libverbs -lnuma
</span><br>
<span class="quotelev2">&gt; &gt; -ldl
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; -lnsl
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; -lutil -lm  -lcognomen \
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;         -L/usr/local/openmpi/1.3.3/gcc/x86_64/lib64 -lmpi_cxx -lmpi
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; -lopen-rte -lopen-pal -lrdmacm -libverbs -lnuma -ldl -lnsl -lutil
</span><br>
<span class="quotelev2">&gt; &gt; -lm
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; -lcognomen
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; /usr/bin/ld: cannot find -lrdmacm
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Your OpenMPI install (incorrectly?) thinks it has librdmacm
</span><br>
<span class="quotelev2">&gt; &gt; available,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; but the library isn't in your search path.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; It apparently defaults to enabled in 1.3.3.  That seems rather
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; silly, since I imagine the library requires RDMA hardware, which
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; is of course not ubiquitous.  Anyway, try configuring OpenMPI with
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; --disable-openib-rdmacm and then rerunning build_visit.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Of course, if you actually have an RDMA cluster, you'll want to delve
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; deeper.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Cheers,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; -tom
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------- End of Forwarded Message
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --001636e0b6b9dccd4d047af22bb9
</span><br>
<span class="quotelev1">&gt; Content-Type: text/html; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt; Content-Transfer-Encoding: quoted-printable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Tom,&lt;br&gt;&lt;br&gt;&amp;quot;hello world&amp;quot; MPI program also won&amp;#39;t compile i=
</span><br>
<span class="quotelev1">&gt; f librdmacm-devel-1.0.8-5.el5 is not installed. I have asked the person who=
</span><br>
<span class="quotelev1">&gt;  maintain the openmpi package on how they were compiled. My guess is librdm=
</span><br>
<span class="quotelev1">&gt; acm-devel-1.0.8-5.el5 may need to be added as dependency package for openmp=
</span><br>
<span class="quotelev1">&gt; i010208-gcc-devel-1.2.8-8.cses.5.PU_IAS.5 package (where I got my openmpi i=
</span><br>
<span class="quotelev1">&gt; nstallation) to solve the problem and to verify that we have the correct op=
</span><br>
<span class="quotelev1">&gt; enmpi compilation.&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;Thanks for your help&lt;br&gt;Simon&lt;br&gt;&lt;br&gt;&lt;div class=3D&quot;gmail_quote&quot;&gt;On Wed,=
</span><br>
<span class="quotelev1">&gt;  Dec 16, 2009 at 5:45 PM, tom fogal &lt;span dir=3D&quot;ltr&quot;&gt;&amp;lt;&lt;a href=3D&quot;mailto=
</span><br>
<span class="quotelev1">&gt; :tfogal_at_[hidden]&quot;&gt;tfogal_at_[hidden]&lt;/a&gt;&amp;gt;&lt;/span&gt; wrote:&lt;br&gt;&lt;blockqu=
</span><br>
<span class="quotelev1">&gt; ote class=3D&quot;gmail_quote&quot; style=3D&quot;border-left: 1px solid rgb(204, 204, 204=
</span><br>
<span class="quotelev1">&gt; ); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;&quot;&gt;
</span><br>
<span class="quotelev1">&gt; Hi,&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; Jeff sent this reply to our inquiry yesterday.&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; Simon -- can you give it a read? =A0In particular, validating you&amp;#39;ve go=
</span><br>
<span class="quotelev1">&gt; t&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; the right mpic++ sounds like a good idea. =A0We&amp;#39;re also curious if a&lt;br=
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; simple &amp;quot;hello world&amp;quot; MPI program can link using gcc + the flags f=
</span><br>
<span class="quotelev1">&gt; rom&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; mpic++ -show.&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; -tom&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; ------- Forwarded Message&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &amp;lt;&lt;a href=3D&quot;mailto:jsquyres_at_[hidden]&quot;&gt;jsquyres_at_cisco=
</span><br>
<span class="quotelev1">&gt; .com&lt;/a&gt;&amp;gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; In-Reply-To: &amp;lt;&lt;a href=3D&quot;mailto:auto-000021432141_at_[hidden]&quot;&gt;auto-000=
</span><br>
<span class="quotelev1">&gt; 021432141_at_[hidden]&lt;/a&gt;&amp;gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; Date: Wed, 16 Dec 2009 17:20:35 -0500&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; To: &amp;quot;Open MPI Users&amp;quot; &amp;lt;&lt;a href=3D&quot;mailto:users_at_[hidden]&quot;&gt;us=
</span><br>
<span class="quotelev1">&gt; ers_at_[hidden]&lt;/a&gt;&amp;gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; Cc: VisIt Developers &amp;lt;&lt;a href=3D&quot;mailto:visit-developers_at_[hidden]&quot;=
</span><br>
<span class="quotelev2">&gt; &gt;visit-developers_at_[hidden]&lt;/a&gt;&amp;gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot&lt;br&gt;
</span><br>
<span class="quotelev1">&gt;  =A0 =A0 =A0 =A0find-lrdmacm on 9184&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; It depends on how Open MPI was built.&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; If Open MPI was built without plugins (i.e., all the plugins are slurped up=
</span><br>
<span class="quotelev1">&gt;  into libmpi and friends), then yes, applications need to link against libr=
</span><br>
<span class="quotelev1">&gt; dmacm to use the RDMA CM mode of OpenFabrics transport.&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; If Open MPI was built with plugins (which is the default), then apps don&amp;#3=
</span><br>
<span class="quotelev1">&gt; 9;t need to link against librdmacm because the only use of rdmacm is in an =
</span><br>
<span class="quotelev1">&gt; Open MPI plugin, and that plugin was linked against librdmacm.&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; That being said, the output from mpic++ --showme should give you something =
</span><br>
<span class="quotelev1">&gt; that is directly compile-/link-able. =A0So it is odd if mpic++ is showing y=
</span><br>
<span class="quotelev1">&gt; ou something that can&amp;#39;t (or shouldn&amp;#39;t?) be done. =A0Did a -L argume=
</span><br>
<span class="quotelev1">&gt; nt get lost somewhere, perchance?&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; Does linking MPI applications with mpic++ work properly, or does it result =
</span><br>
<span class="quotelev1">&gt; in the same error? =A0If it results in the same error, then perhaps somethi=
</span><br>
<span class="quotelev1">&gt; ng has changed since Open MPI was installed...?&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; All this being said, two other random points:&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; 1. Ensure that you&amp;#39;re using the &amp;quot;right&amp;quot; mpic++. =A0I.e., make=
</span><br>
<span class="quotelev1">&gt;  sure it matches the version/installation of Open MPI that you&amp;#39;re tryin=
</span><br>
<span class="quotelev1">&gt; g to use.&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; 2. If you don&amp;#39;t link with the librdmacm, you&amp;#39;re probably not losing=
</span><br>
<span class="quotelev1">&gt;  any important functionality unless you have an iWarp-based cluster (that&amp;#=
</span><br>
<span class="quotelev1">&gt; 39;s the only transport that *needs* librdmacm). =A0IB-based networks can u=
</span><br>
<span class="quotelev1">&gt; se librdmacm, but don&amp;#39;t *need* it (it&amp;#39;s only used for making initia=
</span><br>
<span class="quotelev1">&gt; l connections, so using librdmacm or not has no implications on overall MPI=
</span><br>
<span class="quotelev1">&gt;  performance). =A0It&amp;#39;s still odd that mpic++ wants it and it can&amp;#39;t =
</span><br>
<span class="quotelev1">&gt; be found, though...&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; Does that helps?&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;div&gt;&lt;div&gt;&lt;/div&gt;&lt;div class=3D&quot;h5&quot;&gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2009, at 11:11 PM, tom fogal wrote:&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; Simon Su &amp;lt;&lt;a href=3D&quot;mailto:newsgroup4ssu_at_[hidden]&quot;&gt;newsgroup4ssu@=
</span><br>
<span class="quotelev1">&gt; gmail.com&lt;/a&gt;&amp;gt; writes:&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; Hi Tom,&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; I am using the standard openmpi package that run on all the clust=
</span><br>
<span class="quotelev1">&gt; er&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; machines here at Princeton. So, maybe I shouldn&amp;#39;t touch openm=
</span><br>
<span class="quotelev1">&gt; pi. But,&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; removing -lrdmacm from the MPI_LIBS line in the machinename.conf =
</span><br>
<span class="quotelev1">&gt; file&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; worked. =A0Any implication from doing this?&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; The only thing it could possibly do is disable RDMA for you. =A0Howeve=
</span><br>
<span class="quotelev1">&gt; r,&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; since removing it did not produce any undefined symbol errors, my gues=
</span><br>
<span class="quotelev1">&gt; s&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; is that your OpenMPI isn&amp;#39;t using RDMA anyway.&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; There might be an OpenMPI bug here, though. =A0I&amp;#39;ve cc&amp;#39;d the O=
</span><br>
<span class="quotelev1">&gt; penMPI&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; community to see if they have any input. =A0As a summary for them: Sim=
</span><br>
<span class="quotelev1">&gt; on&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; is trying to build our MPI-enabled application. =A0A script which trie=
</span><br>
<span class="quotelev1">&gt; s&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; to automate this adds the output of &amp;quot;mpic++ -show&amp;quot;. =A0His b=
</span><br>
<span class="quotelev1">&gt; uild then&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; failed because it attempted to link against librdmacm, which does not&lt;=
</span><br>
<span class="quotelev1">&gt; br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; exist in his normal search paths (or maybe at all). =A0Is it possible&lt;=
</span><br>
<span class="quotelev1">&gt; br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; that `mpic++ -show&amp;#39; includes/adds &amp;quot;-lrdmacm&amp;quot; even when O=
</span><br>
<span class="quotelev1">&gt; penMPI is not&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; itself using the library?&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; Thanks,&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; -tom&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; On Tue, Dec 15, 2009 at 8:46 PM, tom fogal &amp;lt;&lt;a href=3D&quot;mailto:=
</span><br>
<span class="quotelev1">&gt; tfogal_at_[hidden]&quot;&gt;tfogal_at_[hidden]&lt;/a&gt;&amp;gt; wrote:&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; Simon Su &amp;lt;&lt;a href=3D&quot;mailto:newsgroup4ssu_at_[hidden]&quot;&gt;news=
</span><br>
<span class="quotelev1">&gt; group4ssu_at_[hidden]&lt;/a&gt;&amp;gt; writes:&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; &amp;gt; I am getting this error message while building 9184.&lt;br=
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; [snip]&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; &amp;gt; -lz -lm -ldl =A0-lpthread -L/usr/local/openmpi/1.3.3/gc=
</span><br>
<span class="quotelev1">&gt; c/x86_64/lib64&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; &amp;gt; -lmpi_cxx -lmpi -lopen-rte -lopen-pal -lrdmacm -libverb=
</span><br>
<span class="quotelev1">&gt; s -lnuma -ldl&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; -lnsl&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; &amp;gt; -lutil -lm =A0-lcognomen \&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; &amp;gt; =A0 =A0 =A0 =A0 -L/usr/local/openmpi/1.3.3/gcc/x86_64/l=
</span><br>
<span class="quotelev1">&gt; ib64 -lmpi_cxx -lmpi&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; &amp;gt; -lopen-rte -lopen-pal -lrdmacm -libverbs -lnuma -ldl -l=
</span><br>
<span class="quotelev1">&gt; nsl -lutil -lm&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; &amp;gt; -lcognomen&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; &amp;gt; /usr/bin/ld: cannot find -lrdmacm&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; &amp;gt; collect2: ld returned 1 exit status&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; Your OpenMPI install (incorrectly?) thinks it has librdmacm =
</span><br>
<span class="quotelev1">&gt; available,&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; but the library isn&amp;#39;t in your search path.&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; It apparently defaults to enabled in 1.3.3. =A0That seems ra=
</span><br>
<span class="quotelev1">&gt; ther&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; silly, since I imagine the library requires RDMA hardware, w=
</span><br>
<span class="quotelev1">&gt; hich&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; is of course not ubiquitous. =A0Anyway, try configuring Open=
</span><br>
<span class="quotelev1">&gt; MPI with&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; --disable-openib-rdmacm and then rerunning build_visit.&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; Of course, if you actually have an RDMA cluster, you&amp;#39;ll =
</span><br>
<span class="quotelev1">&gt; want to delve&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; deeper.&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; Cheers,&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &amp;gt; &amp;gt; -tom&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;/div&gt;&lt;/div&gt;&amp;gt; _______________________________________________&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; users mailing list&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &lt;a href=3D&quot;mailto:users_at_[hidden]&quot;&gt;users_at_[hidden]&lt;/a&gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt; &lt;a href=3D&quot;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&quot; target=
</span><br>
<span class="quotelev1">&gt; =3D&quot;_blank&quot;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users</a">http://www.open-mpi.org/mailman/listinfo.cgi/users</a</a>&gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; - --&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;a href=3D&quot;mailto:jsquyres_at_[hidden]&quot;&gt;jsquyres_at_[hidden]&lt;/a&gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; users mailing list&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;a href=3D&quot;mailto:users_at_[hidden]&quot;&gt;users_at_[hidden]&lt;/a&gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;a href=3D&quot;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&quot; target=3D&quot;_b=
</span><br>
<span class="quotelev1">&gt; lank&quot;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users</a">http://www.open-mpi.org/mailman/listinfo.cgi/users</a</a>&gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; ------- End of Forwarded Message&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;/blockquote&gt;&lt;/div&gt;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --001636e0b6b9dccd4d047af22bb9--
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11589.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11587.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Maybe in reply to:</strong> <a href="11551.php">tom fogal: "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find -lrdmacm on 9184"</a>
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
