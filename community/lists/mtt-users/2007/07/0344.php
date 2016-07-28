<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul  6 15:05:38 2007" -->
<!-- isoreceived="20070706190538" -->
<!-- sent="Fri, 6 Jul 2007 15:04:57 -0400" -->
<!-- isosent="20070706190457" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Perl Wrap Error" -->
<!-- id="20070706190457.GA5072_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="62DF58D7-B18D-4392-97A6-54D3484552FC_at_open-mpi.org" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-06 15:04:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0345.php">Joshua Hursey: "Re: [MTT users] Perl Wrap Error"</a>
<li><strong>Previous message:</strong> <a href="0343.php">Joshua Hursey: "[MTT users] Perl Wrap Error"</a>
<li><strong>In reply to:</strong> <a href="0343.php">Joshua Hursey: "[MTT users] Perl Wrap Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0345.php">Joshua Hursey: "Re: [MTT users] Perl Wrap Error"</a>
<li><strong>Reply:</strong> <a href="0345.php">Joshua Hursey: "Re: [MTT users] Perl Wrap Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jul/06/2007 01:22:06PM, Joshua Hursey wrote:
<br>
<span class="quotelev1">&gt; Anyone seen the following error from MTT before? It looks like it is in the 
</span><br>
<span class="quotelev1">&gt; reporter stage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;-------------------------&gt;
</span><br>
<span class="quotelev1">&gt; shell$ /spin/home/jjhursey/testing/mtt//client/mtt --mpi-install  --scratch 
</span><br>
<span class="quotelev1">&gt; /spin/home/jjhursey/testing/scratch/20070706 --file 
</span><br>
<span class="quotelev1">&gt; /spin/home/jjhursey/testing/etc/jaguar/simple-svn.ini --print-time 
</span><br>
<span class="quotelev1">&gt; --verbose --debug 2&gt;&amp;1 1&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /spin/home/jjhursey/testing/scratch/20070706/output.txt
</span><br>
<span class="quotelev1">&gt; This shouldn't happen at /usr/lib/perl5/5.8.3/Text/Wrap.pm line 64.
</span><br>
<span class="quotelev1">&gt; shell$
</span><br>
<span class="quotelev1">&gt; &lt;-------------------------&gt;
</span><br>
<p>&quot;This shouldn't happen at ...&quot; is the die message?
<br>
<p>Try this INI [Reporter: TextFile] section:
<br>
<p>{{{
<br>
&nbsp;&nbsp;[Reporter: text file backup]
<br>
&nbsp;&nbsp;module = TextFile
<br>
<p>&nbsp;&nbsp;textfile_filename = $phase-$section-$mpi_name-$mpi_version.txt
<br>
<p>&nbsp;&nbsp;# User-defined report headers/footers
<br>
&nbsp;&nbsp;textfile_summary_header = &lt;&lt;EOT
<br>
&nbsp;&nbsp;hostname: &amp;shell(&quot;hostname&quot;)
<br>
&nbsp;&nbsp;uname: &amp;shell(&quot;uname -a&quot;)
<br>
&nbsp;&nbsp;who am i: &amp;shell(&quot;who am i&quot;)
<br>
&nbsp;&nbsp;EOT
<br>
<p>&nbsp;&nbsp;textfile_summary_footer =
<br>
&nbsp;&nbsp;textfile_detail_header  =
<br>
&nbsp;&nbsp;textfile_detail_footer  =
<br>
<p>&nbsp;&nbsp;textfile_textwrap = 78
<br>
}}}
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The return code is: 6400
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I attached the output log incase that helps, and the INI file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0345.php">Joshua Hursey: "Re: [MTT users] Perl Wrap Error"</a>
<li><strong>Previous message:</strong> <a href="0343.php">Joshua Hursey: "[MTT users] Perl Wrap Error"</a>
<li><strong>In reply to:</strong> <a href="0343.php">Joshua Hursey: "[MTT users] Perl Wrap Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0345.php">Joshua Hursey: "Re: [MTT users] Perl Wrap Error"</a>
<li><strong>Reply:</strong> <a href="0345.php">Joshua Hursey: "Re: [MTT users] Perl Wrap Error"</a>
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
