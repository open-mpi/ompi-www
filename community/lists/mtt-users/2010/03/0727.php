<?
$subject_val = "Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  8 11:41:39 2010" -->
<!-- isoreceived="20100308164139" -->
<!-- sent="Mon, 8 Mar 2010 11:41:31 -0500" -->
<!-- isosent="20100308164131" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*" -->
<!-- id="20100308164131.GB39749_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FD2DD1D0-8F00-4411-82A3-E796B75CA238_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-08 11:41:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0728.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212:Genericnetworklockingserver	*REVIEW NEEDED*"</a>
<li><strong>Previous message:</strong> <a href="0726.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*"</a>
<li><strong>In reply to:</strong> <a href="0726.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0728.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212:Genericnetworklockingserver	*REVIEW NEEDED*"</a>
<li><strong>Reply:</strong> <a href="0728.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212:Genericnetworklockingserver	*REVIEW NEEDED*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can do the below stuff in a seperate commit.
<br>
<p>-Ethan
<br>
<p>On Fri, Mar/05/2010 09:26:21PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 5, 2010, at 2:05 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The check is there now.  Ready for review.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you mean to include these parts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/Messages.pm Mon Nov 09 14:38:09 2009 -0500
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/Messages.pm Fri Mar 05 14:02:39 2010 -0500
</span><br>
<span class="quotelev1">&gt; @@ -174,7 +174,7 @@
</span><br>
<span class="quotelev1">&gt;      $lev = 0 if (! defined($lev));
</span><br>
<span class="quotelev1">&gt;      my @called = caller($lev);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    my $s = wrap(&quot;&quot;, &quot;   &quot;, (join(&quot;:&quot;, map { &amp;_relative_path($_) } @called[1..2]), @_));
</span><br>
<span class="quotelev1">&gt; +    my $s = (join(&quot;:&quot;, map { &amp;_relative_path($_) } @called[1..2]), @_);
</span><br>
<span class="quotelev1">&gt;      print $s;
</span><br>
<span class="quotelev1">&gt;      print $LOGFILE $s
</span><br>
<span class="quotelev1">&gt;          if (defined($LOGFILE));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- client/mtt  Mon Nov 09 14:38:09 2009 -0500
</span><br>
<span class="quotelev1">&gt; +++ client/mtt  Fri Mar 05 14:02:39 2010 -0500
</span><br>
<span class="quotelev1">&gt; @@ -498,6 +498,15 @@
</span><br>
<span class="quotelev1">&gt;      # execute on_start callback if exists
</span><br>
<span class="quotelev1">&gt;         _do_step($ini, &quot;mtt&quot;, &quot;before_mtt_start_exec&quot;);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +    # Process setenv, unsetenv, prepend_path, and append_path
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    my $config;
</span><br>
<span class="quotelev1">&gt; +    $config-&gt;{setenv} = Value($ini, &quot;mtt&quot;, &quot;setenv&quot;);
</span><br>
<span class="quotelev1">&gt; +    $config-&gt;{unsetenv} = Value($ini, &quot;mtt&quot;, &quot;unsetenv&quot;);
</span><br>
<span class="quotelev1">&gt; +    $config-&gt;{prepend_path} = Value($ini, &quot;mtt&quot;, &quot;prepend_path&quot;);
</span><br>
<span class="quotelev1">&gt; +    $config-&gt;{append_path} = Value($ini, &quot;mtt&quot;, &quot;append_path&quot;);
</span><br>
<span class="quotelev1">&gt; +    my @save_env;
</span><br>
<span class="quotelev1">&gt; +    ProcessEnvKeys($config, \@save_env);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      # Set the logfile, if specified
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --- lib/MTT/Defaults.pm Mon Nov 09 14:38:09 2009 -0500
</span><br>
<span class="quotelev1">&gt; +++ lib/MTT/Defaults.pm Fri Mar 05 14:02:39 2010 -0500
</span><br>
<span class="quotelev1">&gt; @@ -42,7 +42,7 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      known_compiler_names =&gt; [ &quot;gnu&quot;, &quot;pgi&quot;, &quot;ibm&quot;, &quot;intel&quot;, &quot;kai&quot;, &quot;absoft&quot;,
</span><br>
<span class="quotelev1">&gt;                                &quot;pathscale&quot;, &quot;sun&quot;, &quot;microsoft&quot;, &quot;none&quot;, &quot;unknown&quot; ],
</span><br>
<span class="quotelev1">&gt; -    known_resource_manager_names =&gt; [ &quot;slurm&quot;, &quot;tm&quot;, &quot;loadleveler&quot;, &quot;n1ge&quot;,
</span><br>
<span class="quotelev1">&gt; +    known_resource_manager_names =&gt; [ &quot;slurm&quot;, &quot;tm&quot;, &quot;loadleveler&quot;, &quot;sge&quot;,
</span><br>
<span class="quotelev1">&gt;                                        &quot;alps&quot;, &quot;none&quot;, &quot;unknown&quot; ],
</span><br>
<span class="quotelev1">&gt;      known_network_names =&gt; [ &quot;tcp&quot;, &quot;udp&quot;, &quot;ethernet&quot;, &quot;gm&quot;, &quot;mx&quot;, &quot;verbs&quot;,
</span><br>
<span class="quotelev1">&gt;                               &quot;udapl&quot;, &quot;psm&quot;, &quot;elan&quot;, &quot;portals&quot;, &quot;shmem&quot;,
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0728.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212:Genericnetworklockingserver	*REVIEW NEEDED*"</a>
<li><strong>Previous message:</strong> <a href="0726.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*"</a>
<li><strong>In reply to:</strong> <a href="0726.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Genericnetworklockingserver	*REVIEW NEEDED*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0728.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212:Genericnetworklockingserver	*REVIEW NEEDED*"</a>
<li><strong>Reply:</strong> <a href="0728.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212:Genericnetworklockingserver	*REVIEW NEEDED*"</a>
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
