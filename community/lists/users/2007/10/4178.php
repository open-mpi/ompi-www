<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  9 02:52:20 2007" -->
<!-- isoreceived="20071009065220" -->
<!-- sent="Tue, 9 Oct 2007 08:52:13 +0200" -->
<!-- isosent="20071009065213" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)" -->
<!-- id="FCF6A5D6-59F1-4166-A3EA-4EC6F3598867_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F4A98051-7E73-4867-B1D9-9190EDFD4FCD_at_san.rr.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-09 02:52:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4179.php">Neeraj Chourasia: "[OMPI users] Query regarding GPR"</a>
<li><strong>Previous message:</strong> <a href="4177.php">Michael Clover: "[OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>In reply to:</strong> <a href="4177.php">Michael Clover: "[OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent!  Sorry it took so long to resolve this.
<br>
<p>We could put in a few fixes to protect against this specific error  
<br>
(where we call `which $CC|$CXX`), but I'm not sure if there are other  
<br>
places in the configure process that rely on `foo` to output only 1  
<br>
line of data.  So I'm not sure that it would be worth it.
<br>
<p>Specifically, I think that classifying this problem as a &quot;user  
<br>
configuration error&quot; is acceptable.  I'll add this particular issue  
<br>
to the FAQ, though, because it was sufficiently weird/non-obvious  
<br>
what the real problem was so that it will be google-able.
<br>
<p>FWIW, shouldn't DISPLAY stuff be set in .login (vs. .tcshrc)?
<br>
<p><p>On Oct 9, 2007, at 8:44 AM, Michael Clover wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;   as it turned out, my .tcshrc file did output &quot;DISPLAY known&quot;... I
</span><br>
<span class="quotelev1">&gt; had logic to set DISPLAY if it was undefined:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if ( ! $?DISPLAY ) then
</span><br>
<span class="quotelev1">&gt;     if ( ! $?SSH_CLIENT ) then
</span><br>
<span class="quotelev1">&gt;        if ( &quot;$OS&quot; == &quot;darwin&quot;) then
</span><br>
<span class="quotelev1">&gt; #     ........... irrelevant
</span><br>
<span class="quotelev1">&gt;        else
</span><br>
<span class="quotelev1">&gt;           echo &quot;no environment variable to capture your IP from&quot;
</span><br>
<span class="quotelev1">&gt;           set w_data = $user
</span><br>
<span class="quotelev1">&gt;           setenv DISPLAY ${w_data}:0.0
</span><br>
<span class="quotelev1">&gt;        endif
</span><br>
<span class="quotelev1">&gt;     else
</span><br>
<span class="quotelev1">&gt;        set whom = `echo $SSH_CLIENT `
</span><br>
<span class="quotelev1">&gt;        if ( $?whom ) then
</span><br>
<span class="quotelev1">&gt;           set i_am =  `echo $whom[1] | sed -e &quot;s/::ffff:128/128/&quot;`
</span><br>
<span class="quotelev1">&gt;           setenv DISPLAY ${i_am}:0.0
</span><br>
<span class="quotelev1">&gt;        echo &quot; DISPLAY set from SSH_CLIENT&quot;
</span><br>
<span class="quotelev1">&gt;        endif
</span><br>
<span class="quotelev1">&gt;     endif
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;     echo &quot; DISPLAY known&quot;
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have commented out the echo of &quot;display known&quot;, and now
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.4  makes just fine.  Furthermore, openmpi-1.2.3 no longer
</span><br>
<span class="quotelev1">&gt; generates the unterminated newlines for sed either, and also makes
</span><br>
<span class="quotelev1">&gt; correctly.  I must have mistyped something when I grep'ed for
</span><br>
<span class="quotelev1">&gt; &quot;display&quot; or &quot;known&quot; before my reply to Reuti, since I didn't find it
</span><br>
<span class="quotelev1">&gt; until your question.  thanks for all the help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael Clover
</span><br>
<span class="quotelev1">&gt; mclover_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 8, 2007, at 11:09 , users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 8, 2007, at 9:00 , users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 5
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 9 Oct 2007 08:08:23 +0200
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;897EB321-9A89-4D8B-8B19-D53225573619_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  From the files you attached, I see the following in config.log:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_CC_ABSOLUTE=' DISPLAY known
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and several lines later:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_CXX_ABSOLUTE=' DISPLAY known
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But in Makefile, I see this bogus 2-line value (same as you noted):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_CC_ABSOLUTE =  DISPLAY known
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and several lines later:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_CXX_ABSOLUTE =  DISPLAY known
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that we set these two values in configure with the following
</span><br>
<span class="quotelev2">&gt;&gt; commands:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_CC_ABSOLUTE=&quot;`which $CC`&quot;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_CXX_ABSOLUTE=&quot;`which $CXX`&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I *suspect* that the bogus values in config.status are totally
</span><br>
<span class="quotelev2">&gt;&gt; hosing you when trying to create all the other files -- the version
</span><br>
<span class="quotelev2">&gt;&gt; of &quot;sed&quot; is a red herring.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What exactly is your output when you run &quot;which gcc&quot; and &quot;which g+
</span><br>
<span class="quotelev2">&gt;&gt; +&quot;?  We are blindly taking the whole value -- mainly because I've
</span><br>
<span class="quotelev2">&gt;&gt; never seen &quot;which foo&quot; give more than one line on stdout.  ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What *could* be happening is that your shell startup files are
</span><br>
<span class="quotelev2">&gt;&gt; generating some output (e.g., &quot;DISPLAY known&quot;) and that's being
</span><br>
<span class="quotelev2">&gt;&gt; output before &quot;which foo&quot; is run because of the `` usage.  Do your
</span><br>
<span class="quotelev2">&gt;&gt; shell startup files emit &quot;DISPLAY known&quot; when you start up?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
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
<span class="quotelev2">&gt;&gt; End of users Digest, Vol 713, Issue 1
</span><br>
<span class="quotelev2">&gt;&gt; *************************************
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4179.php">Neeraj Chourasia: "[OMPI users] Query regarding GPR"</a>
<li><strong>Previous message:</strong> <a href="4177.php">Michael Clover: "[OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>In reply to:</strong> <a href="4177.php">Michael Clover: "[OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
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
