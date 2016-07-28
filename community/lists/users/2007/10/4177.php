<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  9 02:44:34 2007" -->
<!-- isoreceived="20071009064434" -->
<!-- sent="Mon, 8 Oct 2007 23:44:29 -0700" -->
<!-- isosent="20071009064429" -->
<!-- name="Michael Clover" -->
<!-- email="mclover_at_[hidden]" -->
<!-- subject="[OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)" -->
<!-- id="F4A98051-7E73-4867-B1D9-9190EDFD4FCD_at_san.rr.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.11956.1191910167.6844.users_at_open-mpi.org" -->
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
<strong>From:</strong> Michael Clover (<em>mclover_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-09 02:44:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4178.php">Jeff Squyres: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>Previous message:</strong> <a href="4176.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4178.php">Jeff Squyres: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>Reply:</strong> <a href="4178.php">Jeff Squyres: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
&nbsp;&nbsp;as it turned out, my .tcshrc file did output &quot;DISPLAY known&quot;... I  
<br>
had logic to set DISPLAY if it was undefined:
<br>
<p>if ( ! $?DISPLAY ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( ! $?SSH_CLIENT ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( &quot;$OS&quot; == &quot;darwin&quot;) then
<br>
#     ........... irrelevant
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;no environment variable to capture your IP from&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set w_data = $user
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setenv DISPLAY ${w_data}:0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set whom = `echo $SSH_CLIENT `
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( $?whom ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set i_am =  `echo $whom[1] | sed -e &quot;s/::ffff:128/128/&quot;`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setenv DISPLAY ${i_am}:0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot; DISPLAY set from SSH_CLIENT&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo &quot; DISPLAY known&quot;
<br>
endif
<br>
<p>I have commented out the echo of &quot;display known&quot;, and now  
<br>
openmpi-1.2.4  makes just fine.  Furthermore, openmpi-1.2.3 no longer  
<br>
generates the unterminated newlines for sed either, and also makes  
<br>
correctly.  I must have mistyped something when I grep'ed for  
<br>
&quot;display&quot; or &quot;known&quot; before my reply to Reuti, since I didn't find it  
<br>
until your question.  thanks for all the help.
<br>
<p>Michael Clover
<br>
mclover_at_[hidden]
<br>
<p><p><p>On Oct 8, 2007, at 11:09 , users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 8, 2007, at 9:00 , users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 5
</span><br>
<span class="quotelev1">&gt; Date: Tue, 9 Oct 2007 08:08:23 +0200
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;897EB321-9A89-4D8B-8B19-D53225573619_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  From the files you attached, I see the following in config.log:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_CC_ABSOLUTE=' DISPLAY known
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and several lines later:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_CXX_ABSOLUTE=' DISPLAY known
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But in Makefile, I see this bogus 2-line value (same as you noted):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_CC_ABSOLUTE =  DISPLAY known
</span><br>
<span class="quotelev1">&gt; /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and several lines later:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_CXX_ABSOLUTE =  DISPLAY known
</span><br>
<span class="quotelev1">&gt; /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that we set these two values in configure with the following
</span><br>
<span class="quotelev1">&gt; commands:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_CC_ABSOLUTE=&quot;`which $CC`&quot;
</span><br>
<span class="quotelev1">&gt; OMPI_CXX_ABSOLUTE=&quot;`which $CXX`&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I *suspect* that the bogus values in config.status are totally
</span><br>
<span class="quotelev1">&gt; hosing you when trying to create all the other files -- the version
</span><br>
<span class="quotelev1">&gt; of &quot;sed&quot; is a red herring.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What exactly is your output when you run &quot;which gcc&quot; and &quot;which g+
</span><br>
<span class="quotelev1">&gt; +&quot;?  We are blindly taking the whole value -- mainly because I've
</span><br>
<span class="quotelev1">&gt; never seen &quot;which foo&quot; give more than one line on stdout.  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What *could* be happening is that your shell startup files are
</span><br>
<span class="quotelev1">&gt; generating some output (e.g., &quot;DISPLAY known&quot;) and that's being
</span><br>
<span class="quotelev1">&gt; output before &quot;which foo&quot; is run because of the `` usage.  Do your
</span><br>
<span class="quotelev1">&gt; shell startup files emit &quot;DISPLAY known&quot; when you start up?
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
<span class="quotelev1">&gt; End of users Digest, Vol 713, Issue 1
</span><br>
<span class="quotelev1">&gt; *************************************
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4178.php">Jeff Squyres: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>Previous message:</strong> <a href="4176.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4178.php">Jeff Squyres: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>Reply:</strong> <a href="4178.php">Jeff Squyres: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
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
