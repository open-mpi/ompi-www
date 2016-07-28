<?
$subject_val = "Re: [MTT devel] Oleg's mtt client changes.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 16:37:27 2008" -->
<!-- isoreceived="20080110213727" -->
<!-- sent="Thu, 10 Jan 2008 16:36:59 -0500" -->
<!-- isosent="20080110213659" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Oleg's mtt client changes." -->
<!-- id="6369E308-25DA-421E-A3DD-2BFE735AD522_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2D5DEE3C6A0E0244B0133244731D4C4BA543AF_at_mtlexch01.mtl.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] Oleg's mtt client changes.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 16:36:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0219.php">Jeff Squyres: "[MTT devel] server side Mellanox patch"</a>
<li><strong>Previous message:</strong> <a href="0217.php">Jeff Squyres: "Re: [MTT devel] mtt reporter popups broken"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pasha sent me this list of changes that Mellanox made to the client  
<br>
side of MTT.  Some of them have already been accepted back into the  
<br>
trunk, so I snipped those from this mail.  There's two main fixes  
<br>
left: copytree and new functionality in the Mail reporter.
<br>
<p>More comments below.
<br>
<p><p>On Jan 10, 2008, at 10:21 AM, Pavel Shamis wrote:
<br>
<p><span class="quotelev1">&gt; Jeff, please see the attached file.
</span><br>
<span class="quotelev1">&gt; Most of the fixes already fixed by mtt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please see below my comments (grep &lt;pasha&gt;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: lib/MTT/MPI/Install/Copytree.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/MPI/Install/Copytree.pm (revision 1123)
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/MPI/Install/Copytree.pm (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -48,7 +48,7 @@ sub Install {
</span><br>
<span class="quotelev1">&gt;      $ret-&gt;{exit_status} = 1;
</span><br>
<span class="quotelev1">&gt;      $ret-&gt;{result_message} = &quot;MPI INSTALL COPYTREE PLUGIN IS OUT OF  
</span><br>
<span class="quotelev1">&gt; DATE.  CONTACT AUTHORS&quot;;
</span><br>
<span class="quotelev1">&gt;      Verbose(&quot;*** $ret-&gt;{result_message}\n&quot;);
</span><br>
<span class="quotelev1">&gt; -    return $ret;
</span><br>
<span class="quotelev1">&gt; +    #return $ret;
</span><br>
<p>Hah -- I guess the above message says it all, eh?  :-)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Debug(&quot;&gt;&gt; copytree copying to $config-&gt;{installdir}\n&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -69,9 +69,18 @@ sub Install {
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      # Copy the tree
</span><br>
<span class="quotelev1">&gt; -    MTT::DoCommand::Pushdir($config-&gt;{installdir});
</span><br>
<span class="quotelev1">&gt; +    #MTT::DoCommand::Pushdir($config-&gt;{installdir});
</span><br>
<span class="quotelev1">&gt; +    #$x = MTT::Files::copy_tree(&quot;$config-&gt;{abs_srcdir}&quot;, 1);
</span><br>
<span class="quotelev1">&gt; +    #MTT::DoCommand::Popdir();
</span><br>
<span class="quotelev1">&gt; +    #return undef
</span><br>
<span class="quotelev1">&gt; +    #    if (!$x);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    #OLEG#
</span><br>
<span class="quotelev1">&gt; +    # Copy the tree
</span><br>
<span class="quotelev1">&gt; +    my $start_dir = cwd();
</span><br>
<span class="quotelev1">&gt; +    MTT::DoCommand::Chdir($config-&gt;{installdir});
</span><br>
<span class="quotelev1">&gt;      $x = MTT::Files::copy_tree(&quot;$config-&gt;{abs_srcdir}&quot;, 1);
</span><br>
<span class="quotelev1">&gt; -    MTT::DoCommand::Popdir();
</span><br>
<span class="quotelev1">&gt; +    MTT::DoCommand::Chdir($start_dir);
</span><br>
<span class="quotelev1">&gt;      return undef
</span><br>
<span class="quotelev1">&gt;          if (!$x);
</span><br>
<span class="quotelev1">&gt; &lt;pasha&gt; i guess it is copytree fixes
</span><br>
<p>Looks mostly good; I'll commit (and remove the other &quot;this is broken!&quot;  
<br>
stuff).
<br>
<p><span class="quotelev1">&gt; Index: lib/MTT/Mail.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/Mail.pm (revision 1123)
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/Mail.pm (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -54,7 +54,9 @@ sub Init {
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  sub Send {
</span><br>
<span class="quotelev1">&gt; -    my ($subject, $to, $body) = @_;
</span><br>
<span class="quotelev1">&gt; +    #my ($subject, $to, $body) = @_;
</span><br>
<span class="quotelev1">&gt; +    #OLEG#
</span><br>
<span class="quotelev1">&gt; +    my ($subject, $to, $from, $body) = @_;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Init()
</span><br>
<span class="quotelev1">&gt;          if (! $initialized);
</span><br>
<span class="quotelev1">&gt; @@ -66,11 +68,12 @@ sub Send {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      # Invoke the mail agent to send the mail
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    open MAIL, &quot;|$mail_agent -s \&quot;$subject\&quot; \&quot;$to\&quot;&quot; ||
</span><br>
<span class="quotelev1">&gt; +    #open MAIL, &quot;|$mail_agent -s \&quot;$subject\&quot; \&quot;$to\&quot;&quot; ||
</span><br>
<span class="quotelev1">&gt; +    #OLEG#
</span><br>
<span class="quotelev1">&gt; +    open MAIL, &quot;|$mail_agent -r \&quot;$from\&quot; -s \&quot;$subject\&quot; \&quot;$to\&quot;&quot; ||
</span><br>
<span class="quotelev1">&gt;          die &quot;Could not open pipe to output e-mail\n&quot;;
</span><br>
<span class="quotelev1">&gt;      print MAIL &quot;Subject: $subject\n&quot;;
</span><br>
<span class="quotelev1">&gt;      print MAIL &quot;$body\n&quot;;
</span><br>
<span class="quotelev1">&gt; -    close MAIL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      # Restore the old environment
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;pasha&gt; Here he is changing default user from to some other value.
</span><br>
<p>This looks reasonable, but I think we only want to add the -r if $from  
<br>
is defined.
<br>
<p><span class="quotelev1">&gt;  # If we have a hostlist, return its max procs count
</span><br>
<span class="quotelev1">&gt; Index: lib/MTT/Reporter/Email.pm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/Reporter/Email.pm (revision 1123)
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/Reporter/Email.pm (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -81,6 +81,8 @@ sub Submit {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      # Evaluate the email subject header
</span><br>
<span class="quotelev1">&gt;      my $subject = Value($ini, $section, &quot;email_subject&quot;);
</span><br>
<span class="quotelev1">&gt; +    #OLEG#
</span><br>
<span class="quotelev1">&gt; +    my $from = Value($ini, $section, &quot;email_from&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      my $s;
</span><br>
<span class="quotelev1">&gt;      my $body;
</span><br>
<span class="quotelev1">&gt; @@ -116,7 +118,9 @@ sub Submit {
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      # Now send it
</span><br>
<span class="quotelev1">&gt; -    MTT::Mail::Send($s, $to, $body);
</span><br>
<span class="quotelev1">&gt; +    #MTT::Mail::Send($s, $to, $body);
</span><br>
<span class="quotelev1">&gt; +    #OLEG#
</span><br>
<span class="quotelev1">&gt; +    MTT::Mail::Send($s, $to, $from, $body);
</span><br>
<span class="quotelev1">&gt;      Verbose(&quot;&gt;&gt; Reported to e-mail: $to\n&quot;);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;pasha&gt; again mail fixes
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
<li><strong>Next message:</strong> <a href="0219.php">Jeff Squyres: "[MTT devel] server side Mellanox patch"</a>
<li><strong>Previous message:</strong> <a href="0217.php">Jeff Squyres: "Re: [MTT devel] mtt reporter popups broken"</a>
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
