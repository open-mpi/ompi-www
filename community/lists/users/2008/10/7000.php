<?
$subject_val = "Re: [OMPI users] on SEEK_*";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 09:23:16 2008" -->
<!-- isoreceived="20081016132316" -->
<!-- sent="Thu, 16 Oct 2008 08:23:14 -0500" -->
<!-- isosent="20081016132314" -->
<!-- name="Rajeev Thakur" -->
<!-- email="thakur_at_[hidden]" -->
<!-- subject="Re: [OMPI users] on SEEK_*" -->
<!-- id="EEB2132B0F1D4C8E8D42F0D82B9BB572_at_thakurlaptop" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.3430.1224158694.16379.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] on SEEK_*<br>
<strong>From:</strong> Rajeev Thakur (<em>thakur_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-16 09:23:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7001.php">Paul Kapinos: "[OMPI users] Errors compiling OpenMPI 1.2.8 with SUN Studio express (2008/07/10) in 32bit modus"</a>
<li><strong>Previous message:</strong> <a href="6999.php">Jed Brown: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Maybe in reply to:</strong> <a href="6994.php">Jed Brown: "[OMPI users] on SEEK_*"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the upcoming 1.0.8 release of MPICH2 (next week or so) we are fixing it
<br>
similar to Open MPI, so you shouldn't need to undef anything even in MPICH2.
<br>
<p>Rajeev
<br>
<p><p><span class="quotelev1">&gt; Date: Thu, 16 Oct 2008 12:29:01 +0200
</span><br>
<span class="quotelev1">&gt; From: Jed Brown &lt;jed_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] on SEEK_*
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;20081016102901.GG10378_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've just run into this chunk of code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* MPICH2 will fail if SEEK_* macros are defined
</span><br>
<span class="quotelev1">&gt;  * because they are also C++ enums. Undefine them
</span><br>
<span class="quotelev1">&gt;  * when including mpi.h and then redefine them
</span><br>
<span class="quotelev1">&gt;  * for sanity.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; #  ifdef SEEK_SET
</span><br>
<span class="quotelev1">&gt; #    define MB_SEEK_SET SEEK_SET
</span><br>
<span class="quotelev1">&gt; #    define MB_SEEK_CUR SEEK_CUR
</span><br>
<span class="quotelev1">&gt; #    define MB_SEEK_END SEEK_END
</span><br>
<span class="quotelev1">&gt; #    undef SEEK_SET
</span><br>
<span class="quotelev1">&gt; #    undef SEEK_CUR
</span><br>
<span class="quotelev1">&gt; #    undef SEEK_END
</span><br>
<span class="quotelev1">&gt; #  endif
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #  ifdef MB_SEEK_SET
</span><br>
<span class="quotelev1">&gt; #    define SEEK_SET MB_SEEK_SET
</span><br>
<span class="quotelev1">&gt; #    define SEEK_CUR MB_SEEK_CUR
</span><br>
<span class="quotelev1">&gt; #    define SEEK_END MB_SEEK_END
</span><br>
<span class="quotelev1">&gt; #    undef MB_SEEK_SET
</span><br>
<span class="quotelev1">&gt; #    undef MB_SEEK_CUR
</span><br>
<span class="quotelev1">&gt; #    undef MB_SEEK_END
</span><br>
<span class="quotelev1">&gt; #  endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPICH2 (1.1.0a1) gives these errors if SEEK_* are present:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/mpich2/include/mpicxx.h:26:2: error: #error &quot;SEEK_SET is 
</span><br>
<span class="quotelev1">&gt; #defined but must not be for the C++ binding of MPI&quot;
</span><br>
<span class="quotelev1">&gt; /opt/mpich2/include/mpicxx.h:30:2: error: #error &quot;SEEK_CUR is 
</span><br>
<span class="quotelev1">&gt; #defined but must not be for the C++ binding of MPI&quot;
</span><br>
<span class="quotelev1">&gt; /opt/mpich2/include/mpicxx.h:35:2: error: #error &quot;SEEK_END is 
</span><br>
<span class="quotelev1">&gt; #defined but must not be for the C++ binding of MPI&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but when SEEK_* is not present and iostream has been 
</span><br>
<span class="quotelev1">&gt; included, OMPI-dev
</span><br>
<span class="quotelev1">&gt; gives these errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/ompi/include/openmpi/ompi/mpi/cxx/mpicxx.h:53: error: 
</span><br>
<span class="quotelev1">&gt; ?SEEK_SET? was not declared in this scope
</span><br>
<span class="quotelev1">&gt; /home/ompi/include/openmpi/ompi/mpi/cxx/mpicxx.h:54: error: 
</span><br>
<span class="quotelev1">&gt; ?SEEK_CUR? was not declared in this scope
</span><br>
<span class="quotelev1">&gt; /home/ompi/include/openmpi/ompi/mpi/cxx/mpicxx.h:55: error: 
</span><br>
<span class="quotelev1">&gt; ?SEEK_END? was not declared in this scope
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a subtle difference between OMPI 1.2.7 and -dev at least with
</span><br>
<span class="quotelev1">&gt; GCC 4.3.2.  If iostream was included before mpi.h and then SEEK_* are
</span><br>
<span class="quotelev1">&gt; #undef'd then 1.2.7 succeeds while -dev fails with the message above.
</span><br>
<span class="quotelev1">&gt; If stdio.h is included and SEEK_* are #undef'd then both OMPI versions
</span><br>
<span class="quotelev1">&gt; fail.  MPICH2 requires in both cases that SEEK_* be #undef'd.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What do you recommend to remain portable?  Is this really an MPICH2
</span><br>
<span class="quotelev1">&gt; issue?  The standard doesn't seem to address this issue.  The 
</span><br>
<span class="quotelev1">&gt; MPICH2 FAQ
</span><br>
<span class="quotelev1">&gt; has this
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mcs.anl.gov/research/projects/mpich2/support/index">http://www.mcs.anl.gov/research/projects/mpich2/support/index</a>.
</span><br>
<span class="quotelev1">&gt; php?s=faqs#cxxseek
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jed
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev1">&gt; Name: not available
</span><br>
<span class="quotelev1">&gt; Type: application/pgp-signature
</span><br>
<span class="quotelev1">&gt; Size: 197 bytes
</span><br>
<span class="quotelev1">&gt; Desc: not available
</span><br>
<span class="quotelev1">&gt; URL: 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/200810">http://www.open-mpi.org/MailArchives/users/attachments/200810</a>
</span><br>
<span class="quotelev1">&gt; 16/96b11669/attachment.bin&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; Date: Thu, 16 Oct 2008 07:43:54 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] on SEEK_*
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;A843C2D8-18FA-421E-BA45-1A4B4551A185_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=WINDOWS-1252; format=flowed;
</span><br>
<span class="quotelev1">&gt; 	delsp=yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 16, 2008, at 6:29 AM, Jed Brown wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; but when SEEK_* is not present and iostream has been 
</span><br>
<span class="quotelev1">&gt; included, OMPI- 
</span><br>
<span class="quotelev2">&gt; &gt; dev
</span><br>
<span class="quotelev2">&gt; &gt; gives these errors.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /home/ompi/include/openmpi/ompi/mpi/cxx/mpicxx.h:53: error:  
</span><br>
<span class="quotelev2">&gt; &gt; ?SEEK_SET? was not declared in this scope
</span><br>
<span class="quotelev2">&gt; &gt; /home/ompi/include/openmpi/ompi/mpi/cxx/mpicxx.h:54: error:  
</span><br>
<span class="quotelev2">&gt; &gt; ?SEEK_CUR? was not declared in this scope
</span><br>
<span class="quotelev2">&gt; &gt; /home/ompi/include/openmpi/ompi/mpi/cxx/mpicxx.h:55: error:  
</span><br>
<span class="quotelev2">&gt; &gt; ?SEEK_END? was not declared in this scope
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There is a subtle difference between OMPI 1.2.7 and -dev at 
</span><br>
<span class="quotelev1">&gt; least with
</span><br>
<span class="quotelev2">&gt; &gt; GCC 4.3.2.  If iostream was included before mpi.h and then 
</span><br>
<span class="quotelev1">&gt; SEEK_* are
</span><br>
<span class="quotelev2">&gt; &gt; #undef'd then 1.2.7 succeeds while -dev fails with the 
</span><br>
<span class="quotelev1">&gt; message above.
</span><br>
<span class="quotelev2">&gt; &gt; If stdio.h is included and SEEK_* are #undef'd then both 
</span><br>
<span class="quotelev1">&gt; OMPI versions
</span><br>
<span class="quotelev2">&gt; &gt; fail.  MPICH2 requires in both cases that SEEK_* be #undef'd.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI doesn't require undef'ing of anything.  It should also not  
</span><br>
<span class="quotelev1">&gt; require any special ordering of include files.  Specifically, the  
</span><br>
<span class="quotelev1">&gt; following codes both compile fine for me with 1.2.8 and the OMPI SVN  
</span><br>
<span class="quotelev1">&gt; trunk (which is what I assume you mean by &quot;-dev&quot;?):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int a = MPI::SEEK_SET;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; int a = MPI::SEEK_SET;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So in short: don't #undef anything and OMPI should do the 
</span><br>
<span class="quotelev1">&gt; Right things.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What do you recommend to remain portable?  Is this really an MPICH2
</span><br>
<span class="quotelev2">&gt; &gt; issue?  The standard doesn't seem to address this issue.  
</span><br>
<span class="quotelev1">&gt; The MPICH2  
</span><br>
<span class="quotelev2">&gt; &gt; FAQ
</span><br>
<span class="quotelev2">&gt; &gt; has this
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mcs.anl.gov/research/projects/mpich2/support/index">http://www.mcs.anl.gov/research/projects/mpich2/support/index</a>.
</span><br>
<span class="quotelev1">&gt; php?s=faqs#cxxseek
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is actually a problem in the MPI-2 spec; the names  
</span><br>
<span class="quotelev1">&gt; &quot;MPI::SEEK_SET&quot; (and friends) were unfortunately chosen poorly.   
</span><br>
<span class="quotelev1">&gt; Hopefully that'll be fixed relatively soon, in MPI-2.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPICH chose to handle this situation a different way than we 
</span><br>
<span class="quotelev1">&gt; did, and  
</span><br>
<span class="quotelev1">&gt; apparently requires that you either #undef something or you 
</span><br>
<span class="quotelev1">&gt; #define an  
</span><br>
<span class="quotelev1">&gt; MPICH-specific macro.  I guess the portable way might be to just  
</span><br>
<span class="quotelev1">&gt; always define that MPICH-specific macro.  It should be harmless for  
</span><br>
<span class="quotelev1">&gt; OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, I was chatting with the MPICH developers at the recent 
</span><br>
<span class="quotelev1">&gt; MPI Forum  
</span><br>
<span class="quotelev1">&gt; meeting and showed them how we did our SEEK_* solution in Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7001.php">Paul Kapinos: "[OMPI users] Errors compiling OpenMPI 1.2.8 with SUN Studio express (2008/07/10) in 32bit modus"</a>
<li><strong>Previous message:</strong> <a href="6999.php">Jed Brown: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Maybe in reply to:</strong> <a href="6994.php">Jed Brown: "[OMPI users] on SEEK_*"</a>
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
