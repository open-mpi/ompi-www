<?
$subject_val = "Re: [OMPI devel] RFC: mpirun options";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 17:35:15 2010" -->
<!-- isoreceived="20100420213515" -->
<!-- sent="Tue, 20 Apr 2010 17:34:54 -0400" -->
<!-- isosent="20100420213454" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: mpirun options" -->
<!-- id="64F3A8D7-82C8-49A7-9234-7500753EBC12_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BCCA6B2.8030800_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: mpirun options<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 17:34:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7779.php">Rolf vandeVaart: "[OMPI devel] RFC: Change PML error handler signature"</a>
<li><strong>Previous message:</strong> <a href="7777.php">Rolf vandeVaart: "[OMPI devel] RFC: Calling BTL directly from PML"</a>
<li><strong>In reply to:</strong> <a href="7776.php">Eugene Loh: "[OMPI devel] RFC: mpirun options"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just so there's *some* reply... I'm obviously in favor of this RFC.  ;-)
<br>
<p><p>On Apr 19, 2010, at 2:53 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Jeff and I were talking about trac 2035 and the handling of mpirun
</span><br>
<span class="quotelev1">&gt; command-line options.  While most mpirun options have long,
</span><br>
<span class="quotelev1">&gt; multi-character names prefixed with a double dash, OMPI had originally
</span><br>
<span class="quotelev1">&gt; also wanted to support combinations of short names (e.g., &quot;mpirun -hvq&quot;,
</span><br>
<span class="quotelev1">&gt; even if we don't document such combinations) as well as legacy
</span><br>
<span class="quotelev1">&gt; single-dash names (e.g., &quot;-host&quot;).  To improve diagnosibility of error
</span><br>
<span class="quotelev1">&gt; messages and simplify the source code and user documentations, some
</span><br>
<span class="quotelev1">&gt; simplifications seemed in order.  Since the command-line parsing is
</span><br>
<span class="quotelev1">&gt; shared not only by mpirun but by all OMPI command-line interfaces,
</span><br>
<span class="quotelev1">&gt; however, Jeff suggested an RFC.  So, here goes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; RFC: Drop mpirun Short-Name Combinations
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHAT: No longer support the combination of multiple mpirun short-name (single-character) options into a single argument. E.g., do not allow users to combine mpirun -h -q -v into mpirun -hqv.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, no longer describe separate single-dash and double-dash names such as -server-wait-time and --server-wait-time. Simply give one name per option and indicate that it could be prefixed with either a single or a double dash.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: To improve the diagnosibility of error messages and simplify the description and support of mpirun options.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: Basically, in opal/util/cmd_line.c.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: Upon acceptance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: May 7, 2010.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY (details)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Definitions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are three kinds of mpirun option names:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; kind of name	prefix	length	example
</span><br>
<span class="quotelev1">&gt; long name	--	multi-character	--verbose
</span><br>
<span class="quotelev1">&gt; short name	 -	single-character	 -v
</span><br>
<span class="quotelev1">&gt; single-dash name	 -	multi-character	 -np
</span><br>
<span class="quotelev1">&gt; Background
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We had wanted to support long and short names.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Short names were supposed to be combinable. E.g., instead of ls -l -t -r, just write ls -ltr.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To support backwards compatibility with options that had become well-known from other MPI implementations, we also wanted to support certain short names, such as -np or -host. That is, even though the option starts with a single-dash, we would first check to see if it were a special recognized &quot;single-dash&quot; option name. Only if that check failed would we expand the argument further to parse it as a combination of short names.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Obfuscates Error Messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, the resulting, more complicated grammar leads to misleading error messages. E.g., consider this example from trac 2035:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % mpirun -tag-output -np 4 -nperslot 1 -H saem9,saem10 hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could not find an executable:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Executable: -p
</span><br>
<span class="quotelev1">&gt; Node: saem9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The point of the ticket was mostly that a misspelled option is handled as an unfound executable, but it also points out that we end up reporting on an option (-p) that from the user's perspective isn't even on the command line in the first place. What has happened is that an option (-nperslot) was not recognized, the first character (n) was recognized, the option was parsed as a combination of short names, and one of those short names (-p) was not recognized.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are different ways of cleaning all of this up, but a simple solution is just not to support short-name combinations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fringe Functionality
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The ability to combine short names into a single &quot;-&quot; option is fringe functionality for mpirun anyhow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We don't document this ability in the first place.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Further, we don't have that many short names -- 10, out of a total of 82 options -- and many combinations don't make much sense. The ability to combine options makes most sense for utilities that use short option names, and then if those options don't take arguments. E.g., ls -ltr in place of ls -l -t -r. The mpirun options just aren't like that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Simplify Single-/Double-Dash Usage
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We were going to support single-dash (multi-character) names only sparingly and only for backwards compatibility with well-established options from other MPIs. In reality, we routinely add a single-dash name for each new option we introduce.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We end up having both single-dash and double-dash names, making both source code and user documentation less readable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, ultimately the source code doesn't even check these distinctions when parsing the mpirun command line. For example, we go to the effort in our source code and user documentation to distinguish between -server-wait-time and --server-wait-time, and between -rf and --rankfile. When options are parsed, however, we disregard any such distinctions. E.g., --rf and -rankfile are recognized.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other Issues
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command-line parser is not only for mpirun, however, but for all OMPI command-line interfaces. Hence, this RFC.  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7779.php">Rolf vandeVaart: "[OMPI devel] RFC: Change PML error handler signature"</a>
<li><strong>Previous message:</strong> <a href="7777.php">Rolf vandeVaart: "[OMPI devel] RFC: Calling BTL directly from PML"</a>
<li><strong>In reply to:</strong> <a href="7776.php">Eugene Loh: "[OMPI devel] RFC: mpirun options"</a>
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
