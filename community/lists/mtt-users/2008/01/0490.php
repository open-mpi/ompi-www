<?
$subject_val = "Re: [MTT users] question on MTT setup instructions.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 17:44:35 2008" -->
<!-- isoreceived="20080123224435" -->
<!-- sent="Wed, 23 Jan 2008 17:44:30 -0500" -->
<!-- isosent="20080123224430" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] question on MTT setup instructions." -->
<!-- id="20080123224429.GI17031_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="008701c85e09$26bee360$bcf3a580_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [MTT users] question on MTT setup instructions.<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-23 17:44:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0491.php">Jeff Squyres: "Re: [MTT users] [OMPI devel] Svn password issues with MTT"</a>
<li><strong>Previous message:</strong> <a href="0489.php">Ethan Mallove: "Re: [MTT users] questions on MTT setup instructions."</a>
<li><strong>In reply to:</strong> <a href="0487.php">Jennis Pruett: "[MTT users] question on MTT setup instructions."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jennis,
<br>
<p>FWIW, I run MTT using an MTT source code checkout. (This is
<br>
admittedly not the Right Way to distribute software, but it
<br>
works.) Try this:
<br>
<p>&nbsp;&nbsp;$ svn checkout <a href="https://svn.open-mpi.org/svn/mtt/branches/ompi-core-testers">https://svn.open-mpi.org/svn/mtt/branches/ompi-core-testers</a>
<br>
&nbsp;&nbsp;$ cd ompi-core-testers
<br>
&nbsp;&nbsp;$ client/mtt --file samples/ompi-core-template.ini --verbose
<br>
<p><p>On Wed, Jan/23/2008 02:44:37PM, Jennis Pruett wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I'm following the instructions on the MTT setup page.
</span><br>
<p>What's the URL for this page?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Would someone clarify the &lt;your dir&gt; parameters below.
</span><br>
<span class="quotelev1">&gt;    PREFIX is logically (to me) &quot;where I am putting MTT&quot; ,
</span><br>
<span class="quotelev1">&gt;    yes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    But LIB is always confusing.  Is this some MPI lib
</span><br>
<span class="quotelev1">&gt;    directory, a perl library or the same as &lt;your dir&gt;
</span><br>
<span class="quotelev1">&gt;    above - where I am putting MTT.
</span><br>
<p>LIB is where you want to put the supporting perl libraries.
<br>
PREFIX is where you want to put the mtt executables (which
<br>
are perl scripts).
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    And if so, how do I find where those happen to reside?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Pointing PERLLIB means setting the env var, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Yes, PERLLIB (and also PERL5LIB) is an env var. You only
<br>
need it if, e.g., a certain perl module needed by MTT is in
<br>
a non-standard location. E.g., if you get errors like the
<br>
below, you will need to set PERLLIB (and PERL5LIB) to the
<br>
location of the missing module:
<br>
<p>&nbsp;&nbsp;Can't locate Foo.pm in @INC (@INC contains: /ws/ompi-tools/perl/lib/sun4-solaris-64int /ws/ompi-tools/perl/lib /ws/ompi-tools/perl/lib/usr/perl5/site_perl/5.8.4/sun4-solaris-64int /usr/perl5/5.8.4/lib/sun4-solaris-64int /usr/perl5/5.8.4/lib /usr/perl5/site_perl/5.8.4/sun4-solaris-64int /usr/perl5/site_perl/5.8.4 /usr/perl5/site_perl /usr/perl5/vendor_perl/5.8.4/sun4-solaris-64int /usr/perl5/vendor_perl/5.8.4 /usr/perl5/vendor_perl .) at -e line 1.
<br>
&nbsp;&nbsp;BEGIN failed--compilation aborted at -e line 1.
<br>
<p>Let me know if you get something like the above (in some odd
<br>
perl installations LWP::UserAgent won't be found).
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt;    New to this, thanks.,
</span><br>
<span class="quotelev1">&gt;    Jenny
</span><br>
<span class="quotelev1">&gt;    -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    If you do not have root access:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    $ perl Makefile.PL LIB=&lt;your dir&gt; PREFIX=&lt;your dir&gt;
</span><br>
<span class="quotelev1">&gt;    $ make
</span><br>
<span class="quotelev1">&gt;    $ make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    You will then need to point PERLLIB to &lt;your dir&gt; to run MTT.
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
<li><strong>Next message:</strong> <a href="0491.php">Jeff Squyres: "Re: [MTT users] [OMPI devel] Svn password issues with MTT"</a>
<li><strong>Previous message:</strong> <a href="0489.php">Ethan Mallove: "Re: [MTT users] questions on MTT setup instructions."</a>
<li><strong>In reply to:</strong> <a href="0487.php">Jennis Pruett: "[MTT users] question on MTT setup instructions."</a>
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
