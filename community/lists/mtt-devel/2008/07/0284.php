<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1216";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 12:21:34 2008" -->
<!-- isoreceived="20080723162134" -->
<!-- sent="Wed, 23 Jul 2008 12:21:28 -0400" -->
<!-- isosent="20080723162128" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1216" -->
<!-- id="20080723162127.GE6369_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200807230127.m6N1R4Gj002396_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1216<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 12:21:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0285.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1216"</a>
<li><strong>Previous message:</strong> <a href="0283.php">Josh Hursey: "Re: [MTT devel] bogus timestamps in database"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0285.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1216"</a>
<li><strong>Reply:</strong> <a href="0285.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1216"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nice!
<br>
<p>Which device(s) does DiskFree.pm check for space on? I
<br>
occasionally run out of room in /tmp, so I would want it to
<br>
check my swap space.
<br>
<p>Can we remove these? (All but the .pm and README files.)
<br>
<p>&nbsp;trunk/lib/Filesys/Changes
<br>
&nbsp;trunk/lib/Filesys/MANIFEST
<br>
&nbsp;trunk/lib/Filesys/Makefile.PL
<br>
&nbsp;trunk/lib/Filesys/eg/
<br>
&nbsp;trunk/lib/Filesys/eg/perldf
<br>
&nbsp;trunk/lib/Filesys/eg/silly
<br>
&nbsp;trunk/lib/Filesys/test.pl
<br>
<p>-Ethan
<br>
<p>On Tue, Jul/22/2008 09:27:04PM, jsquyres_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 1216
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1216">https://svn.open-mpi.org/trac/mtt/changeset/1216</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fixes #370: have MTT exit if there isn't enough disk space left.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;    trunk/lib/Filesys/
</span><br>
<span class="quotelev1">&gt;    trunk/lib/Filesys/Changes
</span><br>
<span class="quotelev1">&gt;    trunk/lib/Filesys/DiskFree.pm
</span><br>
<span class="quotelev1">&gt;    trunk/lib/Filesys/MANIFEST
</span><br>
<span class="quotelev1">&gt;    trunk/lib/Filesys/Makefile.PL
</span><br>
<span class="quotelev1">&gt;    trunk/lib/Filesys/README
</span><br>
<span class="quotelev1">&gt;    trunk/lib/Filesys/README.mtt
</span><br>
<span class="quotelev1">&gt;    trunk/lib/Filesys/eg/
</span><br>
<span class="quotelev1">&gt;    trunk/lib/Filesys/eg/perldf   (contents, props changed)
</span><br>
<span class="quotelev1">&gt;    trunk/lib/Filesys/eg/silly   (contents, props changed)
</span><br>
<span class="quotelev1">&gt;    trunk/lib/Filesys/test.pl
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/client/mtt                     |    11 ++++----                                
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Globals.pm             |     5 +++                                     
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/MPI/Get.pm             |     2                                         
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/MPI/Install.pm         |     4 +-                                      
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Test/Build.pm          |     4 +-                                      
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Test/Get.pm            |     2                                         
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Test/Run.pm            |     4 +-                                      
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Test/RunEngine.pm      |     6 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Util.pm                |    50 ++++++++++++++++++++++++++++++++++++++- 
</span><br>
<span class="quotelev1">&gt;    trunk/samples/ompi-core-template.ini |    17 +++++++++++++                           
</span><br>
<span class="quotelev1">&gt;    10 files changed, 86 insertions(+), 19 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/client/mtt
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/client/mtt	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/client/mtt	2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -112,6 +112,7 @@
</span><br>
<span class="quotelev1">&gt;  use MTT::Values;
</span><br>
<span class="quotelev1">&gt;  use MTT::Timer;
</span><br>
<span class="quotelev1">&gt;  use MTT::Util;
</span><br>
<span class="quotelev1">&gt; +use Filesys::DiskFree;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  my @file_arg;
</span><br>
<span class="quotelev1">&gt;  my $stdin_arg;
</span><br>
<span class="quotelev1">&gt; @@ -492,31 +493,31 @@
</span><br>
<span class="quotelev1">&gt;          MTT::Reporter::Init($ini);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    if ($mpi_get &amp;&amp; !MTT::Util::find_terminate_file()) {
</span><br>
<span class="quotelev1">&gt; +    if ($mpi_get &amp;&amp; !MTT::Util::time_to_terminate()) {
</span><br>
<span class="quotelev1">&gt;          &amp;MTT::Timer::start($time_phases);
</span><br>
<span class="quotelev1">&gt;          MTT::MPI::Get::Get($ini, $source_dir, $force_arg);
</span><br>
<span class="quotelev1">&gt;          &amp;MTT::Timer::stop();
</span><br>
<span class="quotelev1">&gt;          &amp;MTT::Timer::print(&quot;Phase: MPI Get&quot;, $time_phases, 1);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    if ($mpi_install &amp;&amp; !MTT::Util::find_terminate_file()) {
</span><br>
<span class="quotelev1">&gt; +    if ($mpi_install &amp;&amp; !MTT::Util::time_to_terminate()) {
</span><br>
<span class="quotelev1">&gt;          &amp;MTT::Timer::start($time_phases);
</span><br>
<span class="quotelev1">&gt;          MTT::MPI::Install::Install($ini, $ini_full, $install_dir, $force_arg);
</span><br>
<span class="quotelev1">&gt;          &amp;MTT::Timer::stop();
</span><br>
<span class="quotelev1">&gt;          &amp;MTT::Timer::print(&quot;Phase: MPI Install&quot;, $time_phases, 1);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    if ($test_get &amp;&amp; !MTT::Util::find_terminate_file()) {
</span><br>
<span class="quotelev1">&gt; +    if ($test_get &amp;&amp; !MTT::Util::time_to_terminate()) {
</span><br>
<span class="quotelev1">&gt;          &amp;MTT::Timer::start($time_phases);
</span><br>
<span class="quotelev1">&gt;          MTT::Test::Get::Get($ini, $source_dir, $force_arg);
</span><br>
<span class="quotelev1">&gt;          &amp;MTT::Timer::stop();
</span><br>
<span class="quotelev1">&gt;          &amp;MTT::Timer::print(&quot;Phase: Test Get&quot;, $time_phases, 1);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    if ($test_build &amp;&amp; !MTT::Util::find_terminate_file()) {
</span><br>
<span class="quotelev1">&gt; +    if ($test_build &amp;&amp; !MTT::Util::time_to_terminate()) {
</span><br>
<span class="quotelev1">&gt;          &amp;MTT::Timer::start($time_phases);
</span><br>
<span class="quotelev1">&gt;          MTT::Test::Build::Build($ini, $ini_full, $install_dir, $force_arg);
</span><br>
<span class="quotelev1">&gt;          &amp;MTT::Timer::stop();
</span><br>
<span class="quotelev1">&gt;          &amp;MTT::Timer::print(&quot;Phase: Test Build&quot;, $time_phases, 1);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    if ($test_run &amp;&amp; !MTT::Util::find_terminate_file()) {
</span><br>
<span class="quotelev1">&gt; +    if ($test_run &amp;&amp; !MTT::Util::time_to_terminate()) {
</span><br>
<span class="quotelev1">&gt;          &amp;MTT::Timer::start($time_phases);
</span><br>
<span class="quotelev1">&gt;          MTT::Test::Run::Run($ini, $ini_full, $install_dir, $runs_data_dir,
</span><br>
<span class="quotelev1">&gt;                              $force_arg);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/lib/Filesys/Changes
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/Filesys/Changes	2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,27 @@
</span><br>
<span class="quotelev1">&gt; +Revision history for Perl extension Filesys::DiskFree.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +0.06   Fri Oct 23 18:26:19 EDT 1998
</span><br>
<span class="quotelev1">&gt; +	- Now supports HP-UX, thanks to Richard Paul for the patch.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +0.05   Wed Aug 26 23:54:15 EDT 1998
</span><br>
<span class="quotelev1">&gt; +	- Now supports OSF/1, thanks to Eric Foster-Johnson for the details.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +0.04   Sat Aug  1 12:15:42 EDT 1998
</span><br>
<span class="quotelev1">&gt; +	- Fixes problem if passed a barefilename, without any '/'.
</span><br>
<span class="quotelev1">&gt; +	- Bug fix in 'silly' example, accidentally deleted a ;
</span><br>
<span class="quotelev1">&gt; +	- perldf now works on filesystems with 0% free (eg psuedo-fs), and
</span><br>
<span class="quotelev1">&gt; +	  formats filesystems with &lt;10% free without decimals. Also changed
</span><br>
<span class="quotelev1">&gt; +	  to round to nearest percentage, instead of rounding down.
</span><br>
<span class="quotelev1">&gt; +	- thanks to Lupe Christoph for spotting these problems.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +0.03   Fri Jul 24 16:28:54 EDT 1998
</span><br>
<span class="quotelev1">&gt; +	- Added Irix format, thanks Danial F. Sully for the patch.
</span><br>
<span class="quotelev1">&gt; +	- Changed Solaris to work across more versions of Solaris,
</span><br>
<span class="quotelev1">&gt; +	  thanks to Lupe Christoph for the details.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +0.02  Thu Jul 23 15:13:20 1998
</span><br>
<span class="quotelev1">&gt; +	- Fixed a mistake in the documentation 
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +0.01  Tue Jul 14 10:32:48 1998
</span><br>
<span class="quotelev1">&gt; +	- original version; created by h2xs 1.18
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/lib/Filesys/DiskFree.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/Filesys/DiskFree.pm	2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,351 @@
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 1998 Alan R. Barclay. All rights reserved. This program
</span><br>
<span class="quotelev1">&gt; +# is free software; you can redistribute it and/or modify it under
</span><br>
<span class="quotelev1">&gt; +# the same terms as Perl itself.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +package Filesys::DiskFree;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +use Carp;
</span><br>
<span class="quotelev1">&gt; +use strict;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#qw();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +use vars qw($VERSION $Format %Df);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +$VERSION = 0.06;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# 
</span><br>
<span class="quotelev1">&gt; +# The format table
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Note, the format names are not gauranteed. If I find that there
</span><br>
<span class="quotelev1">&gt; +# is a reason to rename one, then they be renamed.
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +%Df = (
</span><br>
<span class="quotelev1">&gt; +    'linux' =&gt; {
</span><br>
<span class="quotelev1">&gt; +	'blocks' =&gt; &quot;df -P&quot;,
</span><br>
<span class="quotelev1">&gt; +	'inodes' =&gt; &quot;df -Pi&quot;,
</span><br>
<span class="quotelev1">&gt; +	'format' =&gt; &quot;linuxish&quot;,
</span><br>
<span class="quotelev1">&gt; +    },
</span><br>
<span class="quotelev1">&gt; +    'solaris' =&gt;  {
</span><br>
<span class="quotelev1">&gt; +	'blocks' =&gt; &quot;df -k&quot;,
</span><br>
<span class="quotelev1">&gt; +	'inodes' =&gt; &quot;df -k -o i -F ufs&quot;,
</span><br>
<span class="quotelev1">&gt; +	'format' =&gt; &quot;svish&quot;,
</span><br>
<span class="quotelev1">&gt; +    },
</span><br>
<span class="quotelev1">&gt; +    'bsdos' =&gt; {
</span><br>
<span class="quotelev1">&gt; +	'blocks' =&gt; &quot;df -i&quot;,
</span><br>
<span class="quotelev1">&gt; +	'inodes' =&gt; &quot;df -i&quot;,
</span><br>
<span class="quotelev1">&gt; +	'format' =&gt; 'bsdish',
</span><br>
<span class="quotelev1">&gt; +    },
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    'irix' =&gt; {
</span><br>
<span class="quotelev1">&gt; +    	'blocks' =&gt; &quot;df&quot;,
</span><br>
<span class="quotelev1">&gt; +	'inodes' =&gt; &quot;df -i&quot;,
</span><br>
<span class="quotelev1">&gt; +	'format' =&gt; &quot;irixish&quot;,
</span><br>
<span class="quotelev1">&gt; +    },
</span><br>
<span class="quotelev1">&gt; +    'hpux' =&gt; {
</span><br>
<span class="quotelev1">&gt; +	'blocks' =&gt; &quot;bdf -l -i&quot;,
</span><br>
<span class="quotelev1">&gt; +	'inodes' =&gt; &quot;bdf -l -i&quot;,
</span><br>
<span class="quotelev1">&gt; +	'format' =&gt; 'hpuxish',
</span><br>
<span class="quotelev1">&gt; +    },
</span><br>
<span class="quotelev1">&gt; +    'dec_osf' =&gt; {
</span><br>
<span class="quotelev1">&gt; +	'blocks' =&gt; &quot;df&quot;,
</span><br>
<span class="quotelev1">&gt; +	'inodes' =&gt; &quot;df -i&quot;,
</span><br>
<span class="quotelev1">&gt; +	'format' =&gt; 'svish',
</span><br>
<span class="quotelev1">&gt; +    },
</span><br>
<span class="quotelev1">&gt; +);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +use strict;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +BEGIN    {
</span><br>
<span class="quotelev1">&gt; +    $Format = $^O;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub new {
</span><br>
<span class="quotelev1">&gt; +    my $proto = shift;
</span><br>
<span class="quotelev1">&gt; +    my $class = ref($proto) || $proto;
</span><br>
<span class="quotelev1">&gt; +    my $self  = {
</span><br>
<span class="quotelev1">&gt; +    	FORMAT       =&gt; $Format,
</span><br>
<span class="quotelev1">&gt; +    	DEVICES	     =&gt; undef,
</span><br>
<span class="quotelev1">&gt; +    	MOUNTS	     =&gt; undef,
</span><br>
<span class="quotelev1">&gt; +    	MODE	     =&gt; 'blocks'
</span><br>
<span class="quotelev1">&gt; +    };
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    bless ($self, $class);
</span><br>
<span class="quotelev1">&gt; +    return $self;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub set(){
</span><br>
<span class="quotelev1">&gt; +    my $self=shift;
</span><br>
<span class="quotelev1">&gt; +    my @return;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return undef if(defined $self-&gt;{'DEVICES'});
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if(@_){
</span><br>
<span class="quotelev1">&gt; +	if($_[0] =~ m/format/i){
</span><br>
<span class="quotelev1">&gt; +	    push(@return,$self-&gt;{'FORMAT'});
</span><br>
<span class="quotelev1">&gt; +	    $self-&gt;{'FORMAT'}=$_[1] if(defined $_[1]);
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +	if($_[0] =~ m/mode/i){
</span><br>
<span class="quotelev1">&gt; +	    push(@return,$self-&gt;{'MODE'});
</span><br>
<span class="quotelev1">&gt; +	    $self-&gt;{'MODE'}='blocks' if($_[1] =~ m/block/i and defined $_[1]);
</span><br>
<span class="quotelev1">&gt; +	    $self-&gt;{'MODE'}='inodes' if($_[1] =~ m/inode/i and defined $_[1]);
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    return @return;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub command () {
</span><br>
<span class="quotelev1">&gt; +	my $self=shift;
</span><br>
<span class="quotelev1">&gt; +	return $Df{&quot;\L&quot;.$self-&gt;{'FORMAT'}.&quot;\E&quot;}{$self-&gt;{'MODE'}};
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +sub df(){
</span><br>
<span class="quotelev1">&gt; +    my $self=shift;
</span><br>
<span class="quotelev1">&gt; +    my $cmd=&quot;df&quot;;
</span><br>
<span class="quotelev1">&gt; +    
</span><br>
<span class="quotelev1">&gt; +    $cmd=$self-&gt;command() or
</span><br>
<span class="quotelev1">&gt; +    	croak &quot;No df command known for format &quot;.$self-&gt;{'FORMAT'};
</span><br>
<span class="quotelev1">&gt; +    open(HANDLE,&quot;$cmd|&quot;) or croak(&quot;Cannot fork $!&quot;);
</span><br>
<span class="quotelev1">&gt; +    return $self-&gt;load(\*HANDLE);
</span><br>
<span class="quotelev1">&gt; +    close(HANDLE) or croak(&quot;Cannot df $!&quot;);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub load()  {
</span><br>
<span class="quotelev1">&gt; +    my $self=shift;
</span><br>
<span class="quotelev1">&gt; +    my $handle=shift;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if(ref $handle eq &quot;GLOB&quot;){
</span><br>
<span class="quotelev1">&gt; +    	while(&lt;$handle&gt;){
</span><br>
<span class="quotelev1">&gt; +    		$self-&gt;readline($_);
</span><br>
<span class="quotelev1">&gt; +    	}
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +    	map { $self-&gt;readline($_) } split(/$\//,$handle);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    return 'true';
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub readline() {
</span><br>
<span class="quotelev1">&gt; +    my $self=shift;
</span><br>
<span class="quotelev1">&gt; +    my $line=shift;
</span><br>
<span class="quotelev1">&gt; +    my ($device,$btotal,$bused,$bavail,$iused,$iavail,$mount,
</span><br>
<span class="quotelev1">&gt; +	$total,$used,$avail);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    chomp($line);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $_=$Df{&quot;\L&quot;.$self-&gt;{'FORMAT'}.&quot;\E&quot;}{'format'};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if(/linuxish/i){
</span><br>
<span class="quotelev1">&gt; +    	return undef if($line =~ /^Filesystem.*Mounted on/i);
</span><br>
<span class="quotelev1">&gt; +    	($device,$total,$used,$avail,undef,$mount)=split(' ',$line);
</span><br>
<span class="quotelev1">&gt; +	if($self-&gt;{'MODE'} eq 'blocks'){
</span><br>
<span class="quotelev1">&gt; +		$total *= 1024;
</span><br>
<span class="quotelev1">&gt; +		$used *= 1024;
</span><br>
<span class="quotelev1">&gt; +		$avail *= 1024;
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +    } elsif(/svish/i){
</span><br>
<span class="quotelev1">&gt; +    	return undef if($line =~ /^Filesystem.*Mounted on/i);
</span><br>
<span class="quotelev1">&gt; +	if($self-&gt;{'MODE'} eq 'blocks'){
</span><br>
<span class="quotelev1">&gt; +		($device,$total,$used,$avail,undef,$mount)=split(' ',$line);
</span><br>
<span class="quotelev1">&gt; +		$total *= 1024;
</span><br>
<span class="quotelev1">&gt; +		$used *= 1024;
</span><br>
<span class="quotelev1">&gt; +		$avail *= 1024;
</span><br>
<span class="quotelev1">&gt; +	} else {
</span><br>
<span class="quotelev1">&gt; +		($device,$used,$avail,undef,$mount)=split(' ',$line);
</span><br>
<span class="quotelev1">&gt; +		$total=$used+$avail;
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +    } elsif(/bsdish/){
</span><br>
<span class="quotelev1">&gt; +    	return undef if($line =~ /^Filesystem.*Mounted on/i);
</span><br>
<span class="quotelev1">&gt; +    	($device,$btotal,$bused,$bavail,undef,$iused,$iavail,undef,$mount)=
</span><br>
<span class="quotelev1">&gt; +		split(' ',$line);
</span><br>
<span class="quotelev1">&gt; +	if($self-&gt;{'MODE'} eq 'blocks'){
</span><br>
<span class="quotelev1">&gt; +		$total=$btotal*512;
</span><br>
<span class="quotelev1">&gt; +		$used=$bused*512;
</span><br>
<span class="quotelev1">&gt; +		$avail=$bavail*512;
</span><br>
<span class="quotelev1">&gt; +	} elsif($self-&gt;{'MODE'} eq 'inodes'){
</span><br>
<span class="quotelev1">&gt; +		$total=undef;
</span><br>
<span class="quotelev1">&gt; +		$used=$iused*512;
</span><br>
<span class="quotelev1">&gt; +		$avail=$iavail*512;
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +    } elsif(/irixish/){
</span><br>
<span class="quotelev1">&gt; +    	return undef if($line =~ /^Filesystem.*Mounted on/i);
</span><br>
<span class="quotelev1">&gt; +	if($self-&gt;{'MODE'} eq 'blocks'){
</span><br>
<span class="quotelev1">&gt; +		($device,undef,$btotal,$bused,$bavail,undef,$mount)=split(' ',$line);
</span><br>
<span class="quotelev1">&gt; +		$total=$btotal*512;
</span><br>
<span class="quotelev1">&gt; +		$used=$bused*512;
</span><br>
<span class="quotelev1">&gt; +		$avail=$bavail*512;
</span><br>
<span class="quotelev1">&gt; +	} elsif($self-&gt;{'MODE'} eq 'inodes'){
</span><br>
<span class="quotelev1">&gt; +		($device,undef,$btotal,$bused,$bavail,undef,$iused,$iavail,undef,$mount)=
</span><br>
<span class="quotelev1">&gt; +			split(' ',$line);
</span><br>
<span class="quotelev1">&gt; +		return undef if $iused =~ /[A-Za-z]+/ or $iused == 0;
</span><br>
<span class="quotelev1">&gt; +		$total = ($iused + $iavail) * 512;
</span><br>
<span class="quotelev1">&gt; +		$used=$iused*512;
</span><br>
<span class="quotelev1">&gt; +		$avail=$iavail*512;
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +    } elsif(/hpuxish/){
</span><br>
<span class="quotelev1">&gt; +    	return undef if($line =~ /^Filesystem.*Mounted on/i);
</span><br>
<span class="quotelev1">&gt; +    	($device,$btotal,$bused,$bavail,undef,$iused,$iavail,undef,$mount)=
</span><br>
<span class="quotelev1">&gt; +		split(' ',$line);
</span><br>
<span class="quotelev1">&gt; +	if($self-&gt;{'MODE'} eq 'blocks'){
</span><br>
<span class="quotelev1">&gt; +		$total=$btotal*1024;
</span><br>
<span class="quotelev1">&gt; +		$used=$bused*1024;
</span><br>
<span class="quotelev1">&gt; +		$avail=$bavail*1024;
</span><br>
<span class="quotelev1">&gt; +	} elsif($self-&gt;{'MODE'} eq 'inodes'){
</span><br>
<span class="quotelev1">&gt; +		$total=($iused + $iavail);
</span><br>
<span class="quotelev1">&gt; +		$used=$iused;
</span><br>
<span class="quotelev1">&gt; +		$avail=$iavail;
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +    	croak &quot;Unknown encoding &quot;.$Df{&quot;\L&quot;.$self-&gt;{'FORMAT'}.&quot;\E&quot;}{'format'}.
</span><br>
<span class="quotelev1">&gt; +    	      &quot; for format &quot;.$self-&gt;{'FORMAT'};
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    $self-&gt;{'MOUNTS'}{$mount}=$device;
</span><br>
<span class="quotelev1">&gt; +    $self-&gt;{'DEVICES'}{$device}={};
</span><br>
<span class="quotelev1">&gt; +    $self-&gt;{'DEVICES'}{$device}{'device'}=$device;
</span><br>
<span class="quotelev1">&gt; +    $self-&gt;{'DEVICES'}{$device}{'total'} =$total;
</span><br>
<span class="quotelev1">&gt; +    $self-&gt;{'DEVICES'}{$device}{'used'}  =$used;
</span><br>
<span class="quotelev1">&gt; +    $self-&gt;{'DEVICES'}{$device}{'avail'} =$avail;
</span><br>
<span class="quotelev1">&gt; +    $self-&gt;{'DEVICES'}{$device}{'mount'} =$mount;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub device() { return extract(@_,'device'); }
</span><br>
<span class="quotelev1">&gt; +sub total()  { return extract(@_,'total');  }
</span><br>
<span class="quotelev1">&gt; +sub used()   { return extract(@_,'used');   }
</span><br>
<span class="quotelev1">&gt; +sub avail()  { return extract(@_,'avail');  }
</span><br>
<span class="quotelev1">&gt; +sub mount()  { return extract(@_,'mount');  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub extract () {
</span><br>
<span class="quotelev1">&gt; +    my $self=shift;
</span><br>
<span class="quotelev1">&gt; +    my $device;
</span><br>
<span class="quotelev1">&gt; +    if(@_) {
</span><br>
<span class="quotelev1">&gt; +	my $thingy=shift;
</span><br>
<span class="quotelev1">&gt; +	if(defined($self-&gt;{'DEVICES'}{$thingy})){
</span><br>
<span class="quotelev1">&gt; +	    $device=$thingy;
</span><br>
<span class="quotelev1">&gt; +	} else {
</span><br>
<span class="quotelev1">&gt; +	    return undef unless(defined($self-&gt;{'MOUNTS'}));
</span><br>
<span class="quotelev1">&gt; +	    while(not defined($self-&gt;{'MOUNTS'}{$thingy})){
</span><br>
<span class="quotelev1">&gt; +		return undef if($thingy eq '/');
</span><br>
<span class="quotelev1">&gt; +		$thingy =~ s!/[^/]*?$!!  unless($thingy =~ s!/$!!);
</span><br>
<span class="quotelev1">&gt; +		$thingy = &quot;/&quot; unless($thingy =~ &quot;/&quot;);
</span><br>
<span class="quotelev1">&gt; +	    }
</span><br>
<span class="quotelev1">&gt; +	    $device=$self-&gt;{'MOUNTS'}{$thingy}
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +    	return $self-&gt;{'DEVICES'}{$device}{$_[0]};
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    return undef;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub disks () {
</span><br>
<span class="quotelev1">&gt; +	my $self=shift;
</span><br>
<span class="quotelev1">&gt; +	return undef unless(defined($self-&gt;{'MOUNTS'}));
</span><br>
<span class="quotelev1">&gt; +	return keys %{$self-&gt;{'MOUNTS'}};
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +1;
</span><br>
<span class="quotelev1">&gt; +__END__
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +=head1 NAME
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Filesys::DiskFree -- perform the Unix command 'df' in a portable fashion
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +=head1 SYNOPSIS
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    use Filesys::DiskFree;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    $handle = new Filesys::DiskFree;
</span><br>
<span class="quotelev1">&gt; +    $handle-&gt;df();
</span><br>
<span class="quotelev1">&gt; +    print &quot;The root device is &quot;.$handle-&gt;device(&quot;/&quot;).&quot;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +    print &quot;It has &quot;.$handle-&gt;avail(&quot;/&quot;).&quot; bytes available\n&quot;;
</span><br>
<span class="quotelev1">&gt; +    print &quot;It has &quot;.$handle-&gt;total(&quot;/&quot;).&quot; bytes total\n&quot;;
</span><br>
<span class="quotelev1">&gt; +    print &quot;It has &quot;.$handle-&gt;used(&quot;/&quot;).&quot; bytes used\n&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +=head1 DESCRIPTION
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Filesys::DiskFree does about what the unix command df(1) does, listing
</span><br>
<span class="quotelev1">&gt; +the mounted disks, and the amount of free space used &amp; available.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +=head2 Functions
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +=over 4
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +=item Filesys::DiskFree-&gt;set('option' =&gt; 'value')
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Sets various options within the module.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +The most common option to change is the mode, which can be either
</span><br>
<span class="quotelev1">&gt; +blocks or inodes. By default, blocks is used.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +If reading a file from a 'foreign' OS using the load() function,
</span><br>
<span class="quotelev1">&gt; +format may be used, which takes the name of an OS as set in the $^O
</span><br>
<span class="quotelev1">&gt; +variable.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Returns the previous values of the options.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +=item Filesys::DiskFree-&gt;df()
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Perfoms a 'df' command, and stores the values for later use.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +=item Filesys::DiskFree-&gt;command()
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Returns the appropriate command to do a 'df' command, for the current
</span><br>
<span class="quotelev1">&gt; +format.  This is used when you wish to call a df on a remote system.
</span><br>
<span class="quotelev1">&gt; +Use the df() method for local df's.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Returns undef if there isn't an appropriate command.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +=item Filesys::DiskFree-&gt;load($line)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Reads in the output of a 'df', $line can be either a scalar or a filehandle.
</span><br>
<span class="quotelev1">&gt; +If $line is a filehandle, then the filehandle is read until EOF. 
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Returns undef on failure
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +=item Filesys::DiskFree-&gt;disks()
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Returns all the disks known about
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +=item Filesys::DiskFree-&gt;device($id)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Returns the device for $id, which is a scalar containing the device name of
</span><br>
<span class="quotelev1">&gt; +a disk or a filename, in which case the disk that filename in stored upon
</span><br>
<span class="quotelev1">&gt; +is used. If a filename doesn't begin with '/', then it is treated as
</span><br>
<span class="quotelev1">&gt; +if is '/'.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +=item Filesys::DiskFree-&gt;mount($id)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Returns the mount point for $id, which is a scalar containing the device
</span><br>
<span class="quotelev1">&gt; +name of a disk or a filename, in which case the disk that filename in
</span><br>
<span class="quotelev1">&gt; +stored upon is used.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +=item Filesys::DiskFree-&gt;avail($id)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Returns the amount of available space in bytes for $id, which is a scalar
</span><br>
<span class="quotelev1">&gt; +containing the device name of a disk or a filename, in which case the
</span><br>
<span class="quotelev1">&gt; +disk that filename in stored upon is used.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +=item Filesys::DiskFree-&gt;total($id)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Returns the amount of total space in bytes for $id, which is a scalar
</span><br>
<span class="quotelev1">&gt; +containing the device name of a disk or a filename, in which case the
</span><br>
<span class="quotelev1">&gt; +disk that filename in stored upon is used.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +=item Filesys::DiskFree-&gt;used($id)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Returns the amount of used space in bytes for $id, which is a scalar
</span><br>
<span class="quotelev1">&gt; +containing the device name of a disk or a filename, in which case the
</span><br>
<span class="quotelev1">&gt; +disk that filename in stored upon is used.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +=head1 BUGS
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +It should support more formats, currently only Linux, Irix, Solaris &amp;
</span><br>
<span class="quotelev1">&gt; +BSD are supported. Other formats will be added as available. Please sent
</span><br>
<span class="quotelev1">&gt; +your OS Name &amp; version, the 'best' df options to use, and the output of
</span><br>
<span class="quotelev1">&gt; +df with those options, and the contents of $^O if you have access to a
</span><br>
<span class="quotelev1">&gt; +non-supported format.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +=head1 AUTHOR
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Alan R. Barclay &lt;gorilla_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/lib/Filesys/MANIFEST
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/Filesys/MANIFEST	2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,8 @@
</span><br>
<span class="quotelev1">&gt; +Changes
</span><br>
<span class="quotelev1">&gt; +DiskFree.pm
</span><br>
<span class="quotelev1">&gt; +MANIFEST
</span><br>
<span class="quotelev1">&gt; +Makefile.PL
</span><br>
<span class="quotelev1">&gt; +README
</span><br>
<span class="quotelev1">&gt; +eg/perldf
</span><br>
<span class="quotelev1">&gt; +eg/silly
</span><br>
<span class="quotelev1">&gt; +test.pl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/lib/Filesys/Makefile.PL
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/Filesys/Makefile.PL	2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,7 @@
</span><br>
<span class="quotelev1">&gt; +use ExtUtils::MakeMaker;
</span><br>
<span class="quotelev1">&gt; +# See lib/ExtUtils/MakeMaker.pm for details of how to influence
</span><br>
<span class="quotelev1">&gt; +# the contents of the Makefile that is written.
</span><br>
<span class="quotelev1">&gt; +WriteMakefile(
</span><br>
<span class="quotelev1">&gt; +    'NAME'	=&gt; 'Filesys::DiskFree',
</span><br>
<span class="quotelev1">&gt; +    'VERSION_FROM' =&gt; 'DiskFree.pm', # finds $VERSION
</span><br>
<span class="quotelev1">&gt; +);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/lib/Filesys/README
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/Filesys/README	2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,86 @@
</span><br>
<span class="quotelev1">&gt; +NAME
</span><br>
<span class="quotelev1">&gt; +    Filesys::DiskFree -- perform the Unix command 'df' in a portable fashion
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +SYNOPSIS
</span><br>
<span class="quotelev1">&gt; +        use Filesys::DiskFree;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        $handle = new Filesys::DiskFree;
</span><br>
<span class="quotelev1">&gt; +        $handle-&gt;df();
</span><br>
<span class="quotelev1">&gt; +        print &quot;The root device is &quot;.$handle-&gt;device(&quot;/&quot;).&quot;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +        print &quot;It has &quot;.$handle-&gt;avail(&quot;/&quot;).&quot; bytes available\n&quot;;
</span><br>
<span class="quotelev1">&gt; +        print &quot;It has &quot;.$handle-&gt;total(&quot;/&quot;).&quot; bytes total\n&quot;;
</span><br>
<span class="quotelev1">&gt; +        print &quot;It has &quot;.$handle-&gt;used(&quot;/&quot;).&quot; bytes used\n&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +DESCRIPTION
</span><br>
<span class="quotelev1">&gt; +    Filesys::DiskFree does about what the unix command df(1) does, listing
</span><br>
<span class="quotelev1">&gt; +    the mounted disks, and the amount of free space used &amp; available.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  Functions
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    Filesys::DiskFree-&gt;set('option' =&gt; 'value')
</span><br>
<span class="quotelev1">&gt; +        Sets various options within the module.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        The most common option to change is the mode, which can be either
</span><br>
<span class="quotelev1">&gt; +        blocks or inodes. By default, blocks is used.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        If reading a file from a 'foreign' OS using the load() function,
</span><br>
<span class="quotelev1">&gt; +        format may be used, which takes the name of an OS as set in the $^O
</span><br>
<span class="quotelev1">&gt; +        variable.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        Returns the previous values of the options.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    Filesys::DiskFree-&gt;df()
</span><br>
<span class="quotelev1">&gt; +        Perfoms a 'df' command, and stores the values for later use.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    Filesys::DiskFree-&gt;command()
</span><br>
<span class="quotelev1">&gt; +        Returns the appropriate command to do a 'df' command, for the
</span><br>
<span class="quotelev1">&gt; +        current format. This is used when you wish to call a df on a remote
</span><br>
<span class="quotelev1">&gt; +        system. Use the df() method for local df's.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        Returns undef if there isn't an appropriate command.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    Filesys::DiskFree-&gt;load($line)
</span><br>
<span class="quotelev1">&gt; +        Reads in the output of a 'df', $line can be either a scalar or a
</span><br>
<span class="quotelev1">&gt; +        filehandle. If $line is a filehandle, then the filehandle is read
</span><br>
<span class="quotelev1">&gt; +        until EOF.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        Returns undef on failure
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    Filesys::DiskFree-&gt;disks()
</span><br>
<span class="quotelev1">&gt; +        Returns all the disks known about
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    Filesys::DiskFree-&gt;device($id)
</span><br>
<span class="quotelev1">&gt; +        Returns the device for $id, which is a scalar containing the device
</span><br>
<span class="quotelev1">&gt; +        name of a disk or a filename, in which case the disk that filename
</span><br>
<span class="quotelev1">&gt; +        in stored upon is used.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    Filesys::DiskFree-&gt;mount($id)
</span><br>
<span class="quotelev1">&gt; +        Returns the mount point for $id, which is a scalar containing the
</span><br>
<span class="quotelev1">&gt; +        device name of a disk or a filename, in which case the disk that
</span><br>
<span class="quotelev1">&gt; +        filename in stored upon is used.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    Filesys::DiskFree-&gt;avail($id)
</span><br>
<span class="quotelev1">&gt; +        Returns the amount of available space in bytes for $id, which is a
</span><br>
<span class="quotelev1">&gt; +        scalar containing the device name of a disk or a filename, in which
</span><br>
<span class="quotelev1">&gt; +        case the disk that filename in stored upon is used.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    Filesys::DiskFree-&gt;total($id)
</span><br>
<span class="quotelev1">&gt; +        Returns the amount of total space in bytes for $id, which is a
</span><br>
<span class="quotelev1">&gt; +        scalar containing the device name of a disk or a filename, in which
</span><br>
<span class="quotelev1">&gt; +        case the disk that filename in stored upon is used.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    Filesys::DiskFree-&gt;used($id)
</span><br>
<span class="quotelev1">&gt; +        Returns the amount of used space in bytes for $id, which is a scalar
</span><br>
<span class="quotelev1">&gt; +        containing the device name of a disk or a filename, in which case
</span><br>
<span class="quotelev1">&gt; +        the disk that filename in stored upon is used.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +BUGS
</span><br>
<span class="quotelev1">&gt; +        It should support more formats, currently only Linux, Irix, Solaris
</span><br>
<span class="quotelev1">&gt; +        &amp; BSD are supported. Other formats will be added as available.
</span><br>
<span class="quotelev1">&gt; +        Please sent your OS Name &amp; version, the 'best' df options to use,
</span><br>
<span class="quotelev1">&gt; +        and the output of df with those options, and the contents of $^O if
</span><br>
<span class="quotelev1">&gt; +        you have access to a non-supported format.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +AUTHOR
</span><br>
<span class="quotelev1">&gt; +        Alan R. Barclay &lt;gorilla_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/lib/Filesys/README.mtt
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/Filesys/README.mtt	2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,4 @@
</span><br>
<span class="quotelev1">&gt; +All the files in this directory are the Filesys::DiskFree distribution
</span><br>
<span class="quotelev1">&gt; +from search.cpan.org:
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +<a href="http://search.cpan.org/CPAN/authors/id/A/AB/ABARCLAY/Filesys-DiskFree-0.06.tar.gz">http://search.cpan.org/CPAN/authors/id/A/AB/ABARCLAY/Filesys-DiskFree-0.06.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/lib/Filesys/eg/perldf
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/Filesys/eg/perldf	2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,50 @@
</span><br>
<span class="quotelev1">&gt; +#!/usr/local/bin/perl -w
</span><br>
<span class="quotelev1">&gt; +use strict;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# A version of 'df' which produces the same output on any system
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +use Filesys::DiskFree;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Create a df handle
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +my $df = new Filesys::DiskFree;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Call the actual df command
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +$df-&gt;df();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +my $disk;
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Output the information
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +my $percent;
</span><br>
<span class="quotelev1">&gt; +foreach $disk(sort($df-&gt;disks)){
</span><br>
<span class="quotelev1">&gt; +	my $total=($df-&gt;used($disk)+$df-&gt;avail($disk));
</span><br>
<span class="quotelev1">&gt; +	$percent=0;
</span><br>
<span class="quotelev1">&gt; +	if($total != 0){
</span><br>
<span class="quotelev1">&gt; +		$percent=sprintf(&quot;%2.0f&quot;,($df-&gt;used($disk)/$total)*100);
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +	write;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Format for the header
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +format STDOUT_TOP =
</span><br>
<span class="quotelev1">&gt; +Filesystem         1024-blocks  Used Available Capacity Mounted on
</span><br>
<span class="quotelev1">&gt; +.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Format for each data item, notice the /1024's, all sizes are stored in bytes
</span><br>
<span class="quotelev1">&gt; +# for portablity
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +format STDOUT =
</span><br>
<span class="quotelev1">&gt; +@&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt; @&gt;&gt;&gt;&gt;&gt;&gt;&gt; @&gt;&gt;&gt;&gt;&gt;&gt; @&gt;&gt;&gt;&gt;&gt;&gt;&gt;    @&gt;&gt;%   @&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;
</span><br>
<span class="quotelev1">&gt; +$df-&gt;device($disk), $df-&gt;total($disk)/1024, $df-&gt;used($disk)/1024,$df-&gt;avail($disk)/1024, $percent,$df-&gt;mount($disk)
</span><br>
<span class="quotelev1">&gt; +.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/lib/Filesys/eg/silly
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/Filesys/eg/silly	2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,72 @@
</span><br>
<span class="quotelev1">&gt; +#!/usr/local/bin/perl -w
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Silly program which shows using this module
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +use strict;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +use Filesys::DiskFree;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Create a new handle
</span><br>
<span class="quotelev1">&gt; +my $df = new Filesys::DiskFree;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Set the modes
</span><br>
<span class="quotelev1">&gt; +$df-&gt;set('-mode'=&gt;'blocks');
</span><br>
<span class="quotelev1">&gt; +$df-&gt;set('-format'=&gt;'solaris');
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Remember what format we're using
</span><br>
<span class="quotelev1">&gt; +print $df-&gt;set('format'),&quot;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Load a scalar with the right values.
</span><br>
<span class="quotelev1">&gt; +my $line= &lt;&lt;EOL;
</span><br>
<span class="quotelev1">&gt; +/dev/hdc1             366312  345605     1788     99%   /home
</span><br>
<span class="quotelev1">&gt; +/dev/hdd1             366312  345605     1788     99%   /usr
</span><br>
<span class="quotelev1">&gt; +EOL
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# And load the scalar into the class
</span><br>
<span class="quotelev1">&gt; +$df-&gt;load($line);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Some prints of info
</span><br>
<span class="quotelev1">&gt; +print $df-&gt;device('/dev/hdc1').&quot; is mounted on &quot;.$df-&gt;mount('/dev/hdc1').&quot;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +$df = new Filesys::DiskFree;
</span><br>
<span class="quotelev1">&gt; +$df-&gt;set('-mode'=&gt;'blocks');
</span><br>
<span class="quotelev1">&gt; +$df-&gt;set('-format'=&gt;'bsdos');
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +$line= &lt;&lt;EOL;
</span><br>
<span class="quotelev1">&gt; +Filesystem                512-blocks     Used    Avail Capacity iused   ifree  %iused  Mounted on
</span><br>
<span class="quotelev1">&gt; +/dev/sd0a                     396670   191816   185020    51%    1611   48307     3%   /
</span><br>
<span class="quotelev1">&gt; +/dev/sd0h                    6816728  2251342  4224548    35%   12738  840380     1%   /home
</span><br>
<span class="quotelev1">&gt; +EOL
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# And load the scalar into the class
</span><br>
<span class="quotelev1">&gt; +$df-&gt;load($line);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +print $df-&gt;device('/home').&quot; is mounted on &quot;.$df-&gt;mount('/home').&quot;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Start again, create another new handle
</span><br>
<span class="quotelev1">&gt; +$df=new Filesys::DiskFree;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# This time we're using a file handle. This is a silly example,
</span><br>
<span class="quotelev1">&gt; +# because you could do the same thing with just the df() method,
</span><br>
<span class="quotelev1">&gt; +# but you could use rsh or some similar method to do this on a
</span><br>
<span class="quotelev1">&gt; +# remote machine
</span><br>
<span class="quotelev1">&gt; +my $cmd=$df-&gt;command();
</span><br>
<span class="quotelev1">&gt; +open(DF,&quot;$cmd|&quot;) or die &quot;Cannot $cmd $!\n&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +$df-&gt;load(\*DF);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +close(DF) or die &quot;Cannot $cmd $! $?\n&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Now output the disks
</span><br>
<span class="quotelev1">&gt; +my @disks=$df-&gt;disks();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +print join(&quot; &quot;,@disks);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +print &quot;\n&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Finally, output the # of free inodes on /
</span><br>
<span class="quotelev1">&gt; +$df=new Filesys::DiskFree;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +$df-&gt;set('-mode'=&gt;'inodes');
</span><br>
<span class="quotelev1">&gt; +$df-&gt;df();
</span><br>
<span class="quotelev1">&gt; +print &quot;Disk &quot;.$df-&gt;device('/').&quot; has &quot;,$df-&gt;avail('/'),&quot; inodes available\n&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/lib/Filesys/test.pl
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/Filesys/test.pl	2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,20 @@
</span><br>
<span class="quotelev1">&gt; +# Before `make install' is performed this script should be runnable with
</span><br>
<span class="quotelev1">&gt; +# `make test'. After `make install' it should work as `perl test.pl'
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +######################### We start with some black magic to print on failure.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Change 1..1 below to 1..last_test_to_print .
</span><br>
<span class="quotelev1">&gt; +# (It may become useful if the test is moved to ./t subdirectory.)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +BEGIN { $| = 1; print &quot;1..1\n&quot;; }
</span><br>
<span class="quotelev1">&gt; +END {print &quot;not ok 1\n&quot; unless $loaded;}
</span><br>
<span class="quotelev1">&gt; +use Filesys::DiskFree;
</span><br>
<span class="quotelev1">&gt; +$loaded = 1;
</span><br>
<span class="quotelev1">&gt; +print &quot;ok 1\n&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +######################### End of black magic.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Insert your test code below (better if it prints &quot;ok 13&quot;
</span><br>
<span class="quotelev1">&gt; +# (correspondingly &quot;not ok 13&quot;) depending on the success of chunk 13
</span><br>
<span class="quotelev1">&gt; +# of the test code):
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Globals.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Globals.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Globals.pm	2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -64,6 +64,9 @@
</span><br>
<span class="quotelev1">&gt;      after_all_exec =&gt; undef,
</span><br>
<span class="quotelev1">&gt;      after_all_exec_timeout =&gt; 10,
</span><br>
<span class="quotelev1">&gt;      after_all_exec_pass =&gt; &quot;&amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))&quot;,
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    min_disk_free =&gt; &quot;5%&quot;,
</span><br>
<span class="quotelev1">&gt; +    min_disk_free_wait =&gt; &quot;60&quot;,
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; @@ -111,7 +114,7 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      # Simple parameters
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    my @names = qw/max_np textwrap drain_timeout trim_save_successful trim_save_failed trial http_proxy https_proxy ftp_proxy terminate_files pause_files/;
</span><br>
<span class="quotelev1">&gt; +    my @names = qw/max_np textwrap drain_timeout trim_save_successful trim_save_failed trial http_proxy https_proxy ftp_proxy terminate_files pause_files min_disk_free min_disk_free_wait/;
</span><br>
<span class="quotelev1">&gt;      foreach my $t (qw/before after/) {
</span><br>
<span class="quotelev1">&gt;          foreach my $a (qw/all each/) {
</span><br>
<span class="quotelev1">&gt;              push(@names, $t . &quot;_&quot; . $a . &quot;_exec&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/MPI/Get.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/MPI/Get.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/MPI/Get.pm	2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -67,7 +67,7 @@
</span><br>
<span class="quotelev1">&gt;      foreach my $section ($ini-&gt;Sections()) {
</span><br>
<span class="quotelev1">&gt;          # See if we're supposed to terminate
</span><br>
<span class="quotelev1">&gt;          last
</span><br>
<span class="quotelev1">&gt; -            if (MTT::Util::find_terminate_file());
</span><br>
<span class="quotelev1">&gt; +            if (MTT::Util::time_to_terminate());
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;          if ($section =~ /^\s*mpi get:/) {
</span><br>
<span class="quotelev1">&gt;              # Make the active INI section name known
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/MPI/Install.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/MPI/Install.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/MPI/Install.pm	2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -152,7 +152,7 @@
</span><br>
<span class="quotelev1">&gt;          # outtermost and innermost loops (even though we *could* check
</span><br>
<span class="quotelev1">&gt;          # at every loop level); that's good enough.
</span><br>
<span class="quotelev1">&gt;          last
</span><br>
<span class="quotelev1">&gt; -            if (MTT::Util::find_terminate_file());
</span><br>
<span class="quotelev1">&gt; +            if (MTT::Util::time_to_terminate());
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;          if ($section =~ /^\s*mpi install:/) {
</span><br>
<span class="quotelev1">&gt;              Verbose(&quot;&gt;&gt; $phase_name [$section]\n&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -224,7 +224,7 @@
</span><br>
<span class="quotelev1">&gt;                              # check at every loop level); that's good
</span><br>
<span class="quotelev1">&gt;                              # enough.
</span><br>
<span class="quotelev1">&gt;                              last
</span><br>
<span class="quotelev1">&gt; -                                if (MTT::Util::find_terminate_file());
</span><br>
<span class="quotelev1">&gt; +                                if (MTT::Util::time_to_terminate());
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                              my $mpi_version = $mpi_get-&gt;{$mpi_version_key};
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Test/Build.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Test/Build.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Test/Build.pm	2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -85,7 +85,7 @@
</span><br>
<span class="quotelev1">&gt;          # outtermost and innermost loops (even though we *could* check
</span><br>
<span class="quotelev1">&gt;          # at every loop level); that's good enough.
</span><br>
<span class="quotelev1">&gt;          last
</span><br>
<span class="quotelev1">&gt; -            if (MTT::Util::find_terminate_file());
</span><br>
<span class="quotelev1">&gt; +            if (MTT::Util::time_to_terminate());
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;          if ($section =~ /^\s*test build:/) {
</span><br>
<span class="quotelev1">&gt;              Verbose(&quot;&gt;&gt; $phase_name [$section]\n&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -152,7 +152,7 @@
</span><br>
<span class="quotelev1">&gt;                                      # every loop level); that's good
</span><br>
<span class="quotelev1">&gt;                                      # enough.
</span><br>
<span class="quotelev1">&gt;                                      last
</span><br>
<span class="quotelev1">&gt; -                                        if (MTT::Util::find_terminate_file());
</span><br>
<span class="quotelev1">&gt; +                                        if (MTT::Util::time_to_terminate());
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                                      my $mpi_install = $mpi_version-&gt;{$mpi_install_key};
</span><br>
<span class="quotelev1">&gt;                                      # Only take sucessful MPI installs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Test/Get.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Test/Get.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Test/Get.pm	2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -47,7 +47,7 @@
</span><br>
<span class="quotelev1">&gt;      foreach my $section ($ini-&gt;Sections()) {
</span><br>
<span class="quotelev1">&gt;          # See if we're supposed to terminate
</span><br>
<span class="quotelev1">&gt;          last
</span><br>
<span class="quotelev1">&gt; -            if (MTT::Util::find_terminate_file());
</span><br>
<span class="quotelev1">&gt; +            if (MTT::Util::time_to_terminate());
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;          if ($section =~ /^\s*test get:/) {
</span><br>
<span class="quotelev1">&gt;              # Make the active INI section name known
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Test/Run.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Test/Run.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Test/Run.pm	2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -78,7 +78,7 @@
</span><br>
<span class="quotelev1">&gt;          # outtermost and innermost loops (even though we *could* check
</span><br>
<span class="quotelev1">&gt;          # at every loop level); that's good enough.
</span><br>
<span class="quotelev1">&gt;          last
</span><br>
<span class="quotelev1">&gt; -            if (MTT::Util::find_terminate_file());
</span><br>
<span class="quotelev1">&gt; +            if (MTT::Util::time_to_terminate());
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;          if ($section =~ /^\s*test run:/) {
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -130,7 +130,7 @@
</span><br>
<span class="quotelev1">&gt;                                  # *could* check at every loop level);
</span><br>
<span class="quotelev1">&gt;                                  # that's good enough.
</span><br>
<span class="quotelev1">&gt;                                  last
</span><br>
<span class="quotelev1">&gt; -                                    if (MTT::Util::find_terminate_file());
</span><br>
<span class="quotelev1">&gt; +                                    if (MTT::Util::time_to_terminate());
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                                  if ($test_build_name eq &quot;all&quot; ||
</span><br>
<span class="quotelev1">&gt;                                      $test_build_key eq $test_build_name) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Test/RunEngine.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Test/RunEngine.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Test/RunEngine.pm	2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -143,7 +143,7 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;          # See if we're supposed to terminate.
</span><br>
<span class="quotelev1">&gt;          last
</span><br>
<span class="quotelev1">&gt; -            if (MTT::Util::find_terminate_file());
</span><br>
<span class="quotelev1">&gt; +            if (MTT::Util::time_to_terminate());
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;          last
</span><br>
<span class="quotelev1">&gt;              if (MTT::Util::check_break_threshold(
</span><br>
<span class="quotelev1">&gt; @@ -183,7 +183,7 @@
</span><br>
<span class="quotelev1">&gt;              foreach my $this_np (@$all_np) {
</span><br>
<span class="quotelev1">&gt;                  # See if we're supposed to terminate.
</span><br>
<span class="quotelev1">&gt;                  last
</span><br>
<span class="quotelev1">&gt; -                    if (MTT::Util::find_terminate_file());
</span><br>
<span class="quotelev1">&gt; +                    if (MTT::Util::time_to_terminate());
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                  $test_results-&gt;{$this_np} =
</span><br>
<span class="quotelev1">&gt;                      _run_one_np($install_dir, $run, $mpi_details, $this_np,
</span><br>
<span class="quotelev1">&gt; @@ -247,7 +247,7 @@
</span><br>
<span class="quotelev1">&gt;              foreach my $e (@$execs) {
</span><br>
<span class="quotelev1">&gt;                  # See if we're supposed to terminate.
</span><br>
<span class="quotelev1">&gt;                  last
</span><br>
<span class="quotelev1">&gt; -                    if (MTT::Util::find_terminate_file());
</span><br>
<span class="quotelev1">&gt; +                    if (MTT::Util::time_to_terminate());
</span><br>
<span class="quotelev1">&gt;                  _run_one_test($install_dir, $run, $mpi_details, $e, $name,
</span><br>
<span class="quotelev1">&gt;                                $variant++, $force);
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Util.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Util.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Util.pm	2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -29,10 +29,12 @@
</span><br>
<span class="quotelev1">&gt;               get_array_ref
</span><br>
<span class="quotelev1">&gt;  );
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +use Cwd;
</span><br>
<span class="quotelev1">&gt;  use MTT::Globals;
</span><br>
<span class="quotelev1">&gt;  use MTT::Messages;
</span><br>
<span class="quotelev1">&gt;  use MTT::Values;
</span><br>
<span class="quotelev1">&gt;  use Data::Dumper;
</span><br>
<span class="quotelev1">&gt; +use Filesys::DiskFree;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -69,7 +71,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  my @_terminate_files;
</span><br>
<span class="quotelev1">&gt;  my @_pause_files;
</span><br>
<span class="quotelev1">&gt; -sub find_terminate_file {
</span><br>
<span class="quotelev1">&gt; +my $df_handle;
</span><br>
<span class="quotelev1">&gt; +sub time_to_terminate {
</span><br>
<span class="quotelev1">&gt;      # If we previously found a terminate file, just return
</span><br>
<span class="quotelev1">&gt;      return 1
</span><br>
<span class="quotelev1">&gt;          if ($MTT::Globals::Values-&gt;{time_to_terminate});
</span><br>
<span class="quotelev1">&gt; @@ -90,6 +93,17 @@
</span><br>
<span class="quotelev1">&gt;                  push(@_pause_files, MTT::Values::EvaluateString($f));
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # Setup min_disk_free to be a number of bytes
</span><br>
<span class="quotelev1">&gt; +        $df_handle = new Filesys::DiskFree;
</span><br>
<span class="quotelev1">&gt; +        if ($MTT::Globals::Values-&gt;{min_disk_free} =~ m/([0-9]{1,2})\%/) {
</span><br>
<span class="quotelev1">&gt; +            $df_handle-&gt;df();
</span><br>
<span class="quotelev1">&gt; +            my $val = $1;
</span><br>
<span class="quotelev1">&gt; +            $val /= 100.0;
</span><br>
<span class="quotelev1">&gt; +            $val *= $df_handle-&gt;total(cwd());
</span><br>
<span class="quotelev1">&gt; +            $val = int($val);
</span><br>
<span class="quotelev1">&gt; +            $MTT::Globals::Values-&gt;{min_disk_free} = $val;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      # Check to see if any of the files exist
</span><br>
<span class="quotelev1">&gt; @@ -124,7 +138,39 @@
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      } while ($found == 1);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    # We didn't find any, so return false
</span><br>
<span class="quotelev1">&gt; +    # Check the disk space remaining
</span><br>
<span class="quotelev1">&gt; +    if ($MTT::Globals::Values-&gt;{min_disk_free} &gt; 0) {
</span><br>
<span class="quotelev1">&gt; +        my $c = getcwd();
</span><br>
<span class="quotelev1">&gt; +        $df_handle-&gt;df();
</span><br>
<span class="quotelev1">&gt; +        if ($df_handle-&gt;avail($c) &lt; 
</span><br>
<span class="quotelev1">&gt; +            $MTT::Globals::Values-&gt;{min_disk_free}) {
</span><br>
<span class="quotelev1">&gt; +            Warning(&quot;Disk free is less than minimum (&quot; . 
</span><br>
<span class="quotelev1">&gt; +                    $df_handle-&gt;avail($c) .
</span><br>
<span class="quotelev1">&gt; +                    &quot; bytes &lt; $MTT::Globals::Values-&gt;{min_disk_free} bytes)\n&quot;);
</span><br>
<span class="quotelev1">&gt; +            Warning(&quot;Waiting for up to $MTT::Globals::Values-&gt;{min_disk_free_wait} minutes to see if the situation resolves itself\n&quot;)
</span><br>
<span class="quotelev1">&gt; +                if ($MTT::Globals::Values-&gt;{min_disk_free_wait} &gt; 0);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            my $i = 0;
</span><br>
<span class="quotelev1">&gt; +            while ($i &lt; 2 * $MTT::Globals::Values-&gt;{min_disk_free_wait}) {
</span><br>
<span class="quotelev1">&gt; +                sleep(30);
</span><br>
<span class="quotelev1">&gt; +                $df_handle-&gt;df();
</span><br>
<span class="quotelev1">&gt; +                if ($df_handle-&gt;avail($c) &gt;
</span><br>
<span class="quotelev1">&gt; +                    $MTT::Globals::Values-&gt;{min_disk_free}) {
</span><br>
<span class="quotelev1">&gt; +                    last;
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +                ++$i;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            # If we reach an hour without more disk, then abort
</span><br>
<span class="quotelev1">&gt; +            if ($i &gt;= 2 * $MTT::Globals::Values-&gt;{min_disk_free_wait}) {
</span><br>
<span class="quotelev1">&gt; +                Warning(&quot;Still not enough disk space available\n&quot;);
</span><br>
<span class="quotelev1">&gt; +                Warning(&quot;Exiting...\n&quot;);
</span><br>
<span class="quotelev1">&gt; +                $MTT::Globals::Values-&gt;{time_to_terminate} = 1;
</span><br>
<span class="quotelev1">&gt; +                return 1;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Ok to keep running; return false
</span><br>
<span class="quotelev1">&gt;      return 0;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/samples/ompi-core-template.ini
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/samples/ompi-core-template.ini	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/samples/ompi-core-template.ini	2008-07-22 21:27:04 EDT (Tue, 22 Jul 2008)
</span><br>
<span class="quotelev1">&gt; @@ -152,6 +152,23 @@
</span><br>
<span class="quotelev1">&gt;  # in the MTT section.
</span><br>
<span class="quotelev1">&gt;  # funclet_files = /path/to/file1.pm, /path/to/file2.pm
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +# OMPI Core: To ensure that MTT doesn't fill up your disk, you can
</span><br>
<span class="quotelev1">&gt; +# tell MTT to stop when disk space gets too low.  You can specify a
</span><br>
<span class="quotelev1">&gt; +# raw number of bytes or a percentage of overall disk space.  For
</span><br>
<span class="quotelev1">&gt; +# example (default value is &quot;5%&quot;):
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# min_disk_free = 5% # stop when there's less than 5% disk free
</span><br>
<span class="quotelev1">&gt; +# min_disk_free = 500000 # stop when there's less than 500,000 bytes free
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# OMPI Core: When MTT detects a low-disk situation, it can wait a
</span><br>
<span class="quotelev1">&gt; +# little while before reporting whatever results it has accumulated
</span><br>
<span class="quotelev1">&gt; +# and exiting.  The min_disk_free_wait field specifies a number of
</span><br>
<span class="quotelev1">&gt; +# minutes to wait for there to be enough disk space to be free.  If
</span><br>
<span class="quotelev1">&gt; +# there is still not enough disk space at the end of that time, MTT
</span><br>
<span class="quotelev1">&gt; +# will report accumulated results and quit.
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# min_disk_free_wait = 60
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  [Lock]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0285.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1216"</a>
<li><strong>Previous message:</strong> <a href="0283.php">Josh Hursey: "Re: [MTT devel] bogus timestamps in database"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0285.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1216"</a>
<li><strong>Reply:</strong> <a href="0285.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1216"</a>
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
