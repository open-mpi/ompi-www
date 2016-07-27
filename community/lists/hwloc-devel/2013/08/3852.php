<?
$subject_val = "Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 29 11:44:59 2013" -->
<!-- isoreceived="20130829154459" -->
<!-- sent="Thu, 29 Aug 2013 17:44:39 +0200" -->
<!-- isosent="20130829154439" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output" -->
<!-- id="521F6C67.7030209_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CALT_uBS1YGuUXLMYkoj1Q=aGWQ_2u2SeNtjpXc7P4EW=xDjYNQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-29 11:44:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3853.php">Christopher Samuel: "Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output"</a>
<li><strong>Previous message:</strong> <a href="3851.php">Jiri Hladky: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3853.php">Christopher Samuel: "Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output"</a>
<li><strong>Maybe reply:</strong> <a href="3853.php">Christopher Samuel: "Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 29/08/2013 15:46, Jiri Hladky a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry I have missed that e-mail. I agree that the output as
</span><br>
<span class="quotelev1">&gt; originally requested would very long or take multiple lines. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So what about this compromise - let's put into the graphical output
</span><br>
<span class="quotelev1">&gt; only release tag (uname_buf.release)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; uname -r
</span><br>
<span class="quotelev1">&gt; 3.10.7-100.fc18.x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That's not a &quot;portable&quot; solution for showing something useful:
<br>
On Debian, it's not perfect, you just get 3.10-2-amd64 but not the
<br>
3.10.5 hidden in there (need uname -v for that)
<br>
On AIX 6.1, you just get &quot;1&quot; (need uname -v for the &quot;6&quot;)
<br>
On BSD, uname -r isn't too bad, uname -v sometimes help, but sometimes
<br>
it's veeeeeeery long.
<br>
<p>Maybe just forget about the automatic way and let you call lstopo with
<br>
something like --annotate-legend &quot;Release: $(uname -r)&quot; (and you deal
<br>
with length constraints) ?
<br>
<p>Brice
<br>
<p><p><span class="quotelev1">&gt; It's short and has the most important information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you think?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jirka
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 27, 2013 at 6:19 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The problem I have while playing with this is that it takes a lot
</span><br>
<span class="quotelev1">&gt;     of space. Putting the entire uname on a single line will be
</span><br>
<span class="quotelev1">&gt;     truncated when the topology drawing isn't large (on machines with
</span><br>
<span class="quotelev1">&gt;     2 cores for instance). And using multiple lines would make the
</span><br>
<span class="quotelev1">&gt;     legend huge.
</span><br>
<span class="quotelev1">&gt;     We could make it optional. But if you have to remember to manually
</span><br>
<span class="quotelev1">&gt;     enable this new option, why not just remember to export to XML
</span><br>
<span class="quotelev1">&gt;     instead, you already have all uname info in there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 26/08/2013 15:11, Jiri Hladky a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     Hi Brice,
</span><br>
<span class="quotelev2">&gt;&gt;     hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I do run hwloc on different versions of Linux kernel when testing
</span><br>
<span class="quotelev2">&gt;&gt;     RHEL. Since sometimes kernel is buggy and does not detect the
</span><br>
<span class="quotelev2">&gt;&gt;     topology correctly it would be useful to have at the bottom of
</span><br>
<span class="quotelev2">&gt;&gt;     the graphical output of the lstopo not only host name but also
</span><br>
<span class="quotelev2">&gt;&gt;     the version of the kernel.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Example of C code on Linux to write this info:
</span><br>
<span class="quotelev2">&gt;&gt;     ===============================================
</span><br>
<span class="quotelev2">&gt;&gt;     #include &lt;sys/utsname.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             if(uname(&amp;uname_buf) == -1)
</span><br>
<span class="quotelev2">&gt;&gt;                 printf(&quot;uname call failed!&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;             else {
</span><br>
<span class="quotelev2">&gt;&gt;                 printf(&quot;Nodename:\t%s\n&quot;, uname_buf.nodename);
</span><br>
<span class="quotelev2">&gt;&gt;                 printf(&quot;Sysname:\t%s\n&quot;, uname_buf.sysname);
</span><br>
<span class="quotelev2">&gt;&gt;                 printf(&quot;Release:\t%s\n&quot;, uname_buf.release);
</span><br>
<span class="quotelev2">&gt;&gt;                 printf(&quot;Version:\t%s\n&quot;, uname_buf.version);
</span><br>
<span class="quotelev2">&gt;&gt;                 printf(&quot;Machine:\t%s\n&quot;, uname_buf.machine);
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Nodename:       localhost.localdomain
</span><br>
<span class="quotelev2">&gt;&gt;     Sysname:        Linux
</span><br>
<span class="quotelev2">&gt;&gt;     Release:        3.10.7-100 &lt;tel:3.10.7-100&gt;.fc18.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;     Version:        #1 SMP Thu Aug 15 22:21:29 UTC 2013
</span><br>
<span class="quotelev2">&gt;&gt;     Machine:        x86_64
</span><br>
<span class="quotelev2">&gt;&gt;     ===============================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Suggestion: on the graphical output of lstopo please add the line
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     System: Linux, x86_64, 3.10.7-100 &lt;tel:3.10.7-100&gt;.fc18.x86_64 #1
</span><br>
<span class="quotelev2">&gt;&gt;     SMP Thu Aug 15 22:21:29 UTC 2013
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;System: %s, %s, %s %s\n&quot;, uname_buf.sysname,
</span><br>
<span class="quotelev2">&gt;&gt;     uname_buf.machine, uname_buf.release, uname_buf.version);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Would it be possible? Any further ideas, suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks a lot!
</span><br>
<span class="quotelev2">&gt;&gt;     Jirka
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Tue, Jun 18, 2013 at 5:17 PM, Jiri Hladky
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;hladky.jiri_at_[hidden] &lt;mailto:hladky.jiri_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hi Brice,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         we test linux kernel job scheduler. To do so, we run for example 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         1
</span><br>
<span class="quotelev2">&gt;&gt;         2
</span><br>
<span class="quotelev2">&gt;&gt;         ....
</span><br>
<span class="quotelev2">&gt;&gt;         16
</span><br>
<span class="quotelev2">&gt;&gt;         32 linpack benchmarks simultaneously. 
</span><br>
<span class="quotelev2">&gt;&gt;         (upto the number of cores)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         For each group of jobs we have this output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         =======2 simultaneous jobs========
</span><br>
<span class="quotelev2">&gt;&gt;         PID #CPU #CPU #CPU #CPU
</span><br>
<span class="quotelev2">&gt;&gt;         PID #CPU #CPU #CPU
</span><br>
<span class="quotelev2">&gt;&gt;         ==============================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         where first column is PID of linpack benchmark and other
</span><br>
<span class="quotelev2">&gt;&gt;         columns is CPU on which the process was running with
</span><br>
<span class="quotelev2">&gt;&gt;         granularity of 1 second
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I would like to check the possibilities to visualize the
</span><br>
<span class="quotelev2">&gt;&gt;         results to the output similar to lstopo --top (see the
</span><br>
<span class="quotelev2">&gt;&gt;         attachment). I would like to write a simple utility which will
</span><br>
<span class="quotelev2">&gt;&gt;          * parse the above file
</span><br>
<span class="quotelev2">&gt;&gt;          * foreach timestep create an output similar to lstopo --top
</span><br>
<span class="quotelev2">&gt;&gt;         output showing, where each job was running
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         How difficult would be this? Could you please provide some
</span><br>
<span class="quotelev2">&gt;&gt;         hints what API functionality to use?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;         Jirka
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3852/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3853.php">Christopher Samuel: "Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output"</a>
<li><strong>Previous message:</strong> <a href="3851.php">Jiri Hladky: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3853.php">Christopher Samuel: "Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output"</a>
<li><strong>Maybe reply:</strong> <a href="3853.php">Christopher Samuel: "Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output"</a>
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
