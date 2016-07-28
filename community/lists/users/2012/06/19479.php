<?
$subject_val = "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  7 13:27:52 2012" -->
<!-- isoreceived="20120607172752" -->
<!-- sent="Thu, 7 Jun 2012 19:27:36 +0200 (CEST)" -->
<!-- isosent="20120607172736" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems compiling openmpi-1.6 on some platforms" -->
<!-- id="201206071727.q57HRaLm025897_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] problems compiling openmpi-1.6 on some platforms" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems compiling openmpi-1.6 on some platforms<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-07 13:27:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19480.php">Bill.Glessner_at_[hidden]: "[OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6"</a>
<li><strong>Previous message:</strong> <a href="19478.php">Siegmar Gross: "Re: [OMPI users] problem with sctp.h on Solaris"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19396.php">Siegmar Gross: "[OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19481.php">Jeff Squyres: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Reply:</strong> <a href="19481.php">Jeff Squyres: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff,
<br>
<p>thank you very much for your help. You were right with your suggestion
<br>
that one of our system commands is responsible for the segmentation
<br>
fault. After splitting the command in config.status I found out that
<br>
gawk was responsible. We installed the latest version and now
<br>
everything works fine. Thank you very much once more.
<br>
<p><span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; configure: creating ./config.status
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating Makefile
</span><br>
<span class="quotelev2">&gt; &gt; ./config.status: line 1197: 26418 Done(141)               eval sed 
</span><br>
<span class="quotelev2">&gt; &gt; \&quot;\$ac_sed_extra\&quot; &quot;$ac_file_inputs&quot;
</span><br>
<span class="quotelev2">&gt; &gt;     26419 Segmentation Fault      (core dumped) | $AWK -f &quot;$ac_tmp/subs.awk&quot; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ac_tmp/out
</span><br>
<span class="quotelev2">&gt; &gt; config.status: error: could not create Makefile
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm looking through the tarball you sent now...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yow!  This segv happens *3 times* during configure -- during the
</span><br>
<span class="quotelev1">&gt; configuration of 3 separate sub-packages in Open MPI: ROMIO,
</span><br>
<span class="quotelev1">&gt; VampirTrace, and libltdl.  And all 3 failures were pretty much
</span><br>
<span class="quotelev1">&gt; identical (the line numbers were different, but that was to be
</span><br>
<span class="quotelev1">&gt; expected).  The failures of the first 2 are not fatal (OMPI will
</span><br>
<span class="quotelev1">&gt; just ignore the ROMIO and VT sub-packages), but we need libltdl,
</span><br>
<span class="quotelev1">&gt; hence that failure is treated as fatal, and configure aborts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I *suspect* that if you configure with --disable-dlopen, then
</span><br>
<span class="quotelev1">&gt; the ROMIO and VT sub-configures will still fail in the same way,
</span><br>
<span class="quotelev1">&gt; but the libltdl stuff will be skipped and therefore not fail.
</span><br>
<span class="quotelev1">&gt;  BUT: I suspect that OMPI's final configuration step (i.e.,
</span><br>
<span class="quotelev1">&gt; where it invokes the top-level config.status) will fail with the
</span><br>
<span class="quotelev1">&gt; segv as well.  Meaning: this looks like a systemic problem on
</span><br>
<span class="quotelev1">&gt; your system with some shell command (awk, sed, eval, ...something).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With that aside, let's look at exactly what is happening here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The segv is occurring in opal/libltdl/config.status.  This is a
</span><br>
<span class="quotelev1">&gt; script that's run right near the very end of the libltdl configure
</span><br>
<span class="quotelev1">&gt; script (which is invoked from OMPI's top-level configure script). 
</span><br>
<span class="quotelev1">&gt; config.status normally does things like creating Makefile's from
</span><br>
<span class="quotelev1">&gt; Makefile.in's, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like you *should* be able to re-create the problem by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cd opal/libltdl
</span><br>
<span class="quotelev1">&gt; ./config.status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I.e., just invoke ./config.status it should segv just like it does
</span><br>
<span class="quotelev1">&gt; when you run the top-level configure, ...etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyhoo, I see the exact line in the config.status where it's
</span><br>
<span class="quotelev1">&gt; failing -- line 1256:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; eval sed \&quot;\$ac_sed_extra\&quot; &quot;$ac_file_inputs&quot; | $AWK -f &quot;$ac_tmp/subs.awk&quot; \
</span><br>
<span class="quotelev2">&gt;   &gt;$ac_tmp/out || as_fn_error $? &quot;could not create $ac_file&quot; &quot;$LINENO&quot; 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ac_sed_extra is defined right above that, and it's a pretty lengthy
</span><br>
<span class="quotelev1">&gt; sed command.  I think what you want to do here is edit config.status
</span><br>
<span class="quotelev1">&gt; and determine exactly which command is set faulting, and see if you
</span><br>
<span class="quotelev1">&gt; can get a core file from it.  For example, I'd probably split that
</span><br>
<span class="quotelev1">&gt; line into multiple lines and see what's going on, maybe something
</span><br>
<span class="quotelev1">&gt; like this (I just typed this in my mail client -- forgive typos):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Enable core dumps
</span><br>
<span class="quotelev1">&gt; limit -c unlimited
</span><br>
<span class="quotelev1">&gt; echo ac_sed_extra is: $ac_sed_extra
</span><br>
<span class="quotelev1">&gt; echo ac_file_inputs is: $ac_file_inputs
</span><br>
<span class="quotelev1">&gt; echo AWK is: $AWK
</span><br>
<span class="quotelev1">&gt; echo ac_tmp is: $ac_tmp
</span><br>
<span class="quotelev1">&gt; echo ac_file is: $ac_file
</span><br>
<span class="quotelev1">&gt; echo contents of subs.awk:
</span><br>
<span class="quotelev1">&gt; cat &quot;$ac_tmp/subs.awk&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; echo ========= output from sed command
</span><br>
<span class="quotelev1">&gt; sed \&quot;\$ac_sed_extra\&quot; &quot;$ac_file_inputs&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; echo ========= eval'ed output from sed command
</span><br>
<span class="quotelev1">&gt; eval sed \&quot;\$ac_sed_extra\&quot; &quot;$ac_file_inputs&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; echo ========= piping to awk command
</span><br>
<span class="quotelev1">&gt; eval sed \&quot;\$ac_sed_extra\&quot; &quot;$ac_file_inputs&quot; | $AWK -f &quot;$ac_tmp/subs.awk&quot; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ... or something like that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See where that takes you.
</span><br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19480.php">Bill.Glessner_at_[hidden]: "[OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6"</a>
<li><strong>Previous message:</strong> <a href="19478.php">Siegmar Gross: "Re: [OMPI users] problem with sctp.h on Solaris"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19396.php">Siegmar Gross: "[OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19481.php">Jeff Squyres: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Reply:</strong> <a href="19481.php">Jeff Squyres: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
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
