<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 30 09:30:47 2006" -->
<!-- isoreceived="20061130143047" -->
<!-- sent="Thu, 30 Nov 2006 09:30:36 -0500" -->
<!-- isosent="20061130143036" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT svn] svn:mtt-svn r461" -->
<!-- id="21D50167-F21D-4A42-8EE4-3C42194D747C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061130142900.GC29643_at_sr1-ubur-03.East.Sun.COM" -->
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
<strong>Date:</strong> 2006-11-30 09:30:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/12/0235.php">Tim Mattox: "[MTT users] Ignore failed v1.1.3b1 builds on Odin today..."</a>
<li><strong>Previous message:</strong> <a href="0233.php">Ethan Mallove: "Re: [MTT users] [MTT svn] svn:mtt-svn r461"</a>
<li><strong>In reply to:</strong> <a href="0233.php">Ethan Mallove: "Re: [MTT users] [MTT svn] svn:mtt-svn r461"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 30, 2006, at 9:29 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Sweet! I guess the only ''drawback'' is the meta-data is
</span><br>
<span class="quotelev1">&gt; only accessable to perl, but who cares.
</span><br>
<p>That was my thought.
<br>
<p><span class="quotelev1">&gt; I bet this fix will
</span><br>
<span class="quotelev1">&gt; make #118 easier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/trac/mtt/ticket/118">http://svn.open-mpi.org/trac/mtt/ticket/118</a>
</span><br>
<span class="quotelev1">&gt;   &quot;Slim down result submissions to the bare essentials&quot;
</span><br>
<p>Hrm.  Maybe.  The actual data is the same -- all I did was change the  
<br>
format in which it was saved to disk.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Nov/30/2006 07:55:14AM, jsquyres_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: jsquyres
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2006-11-30 07:55:07 EST (Thu, 30 Nov 2006)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 461
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Removed:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/lib/XML/
</span><br>
<span class="quotelev2">&gt;&gt; Modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/lib/MTT/Files.pm
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/lib/MTT/MPI.pm
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/lib/MTT/Test.pm
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/lib/MTT/Test/RunEngine.pm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Fixes #144
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This commit is a bunch of things to improve the meta data handling  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; storage in the MTT client:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  * Remove the use of XML::Simple and use Data::Dumper instead.  This
</span><br>
<span class="quotelev2">&gt;&gt;    allows us to remove the costly/slow (and error-prone when  
</span><br>
<span class="quotelev2">&gt;&gt; coding up
</span><br>
<span class="quotelev2">&gt;&gt;    new data layers) data transformation for each of the datasets that
</span><br>
<span class="quotelev2">&gt;&gt;    were saved out to disk.  The output data is about the same size,
</span><br>
<span class="quotelev2">&gt;&gt;    but we avoid the [potentially] huge memory transformation before
</span><br>
<span class="quotelev2">&gt;&gt;    the write, and for large data sets (e.g., Test run data), can save
</span><br>
<span class="quotelev2">&gt;&gt;    quite a bit of time (e.g., ~3 seconds with Data::Dumper vs. ~10
</span><br>
<span class="quotelev2">&gt;&gt;    seconds with XML::Simple).
</span><br>
<span class="quotelev2">&gt;&gt;  * Split the Test run data up into multiple files instead of one huge
</span><br>
<span class="quotelev2">&gt;&gt;    file.  This allows us to write only the new data after tests have
</span><br>
<span class="quotelev2">&gt;&gt;    run rather than having to write ''all'' the data ''every'' time.
</span><br>
<span class="quotelev2">&gt;&gt;    It makes the reading and writing of the test run data a little  
</span><br>
<span class="quotelev2">&gt;&gt; more
</span><br>
<span class="quotelev2">&gt;&gt;    complex, but the performance win is worth it.
</span><br>
<span class="quotelev2">&gt;&gt;  * Write the Test Run data [slightly] less frequently -- i.e., write
</span><br>
<span class="quotelev2">&gt;&gt;    out a [small] batch of new Test Run data periodically rather than
</span><br>
<span class="quotelev2">&gt;&gt;    writing after ''every'' test.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/lib/MTT/Files.pm
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/lib/MTT/Files.pm	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/lib/MTT/Files.pm	2006-11-30 07:55:07 EST (Thu, 30 Nov 2006)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -40,8 +40,15 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -sub mkdir {
</span><br>
<span class="quotelev2">&gt;&gt; +sub safe_mkdir {
</span><br>
<span class="quotelev2">&gt;&gt;      my ($dir) = @_;
</span><br>
<span class="quotelev2">&gt;&gt; +    MTT::Files::mkdir($dir, 1);
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -------
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +sub mkdir {
</span><br>
<span class="quotelev2">&gt;&gt; +    my ($dir, $safe) = @_;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      my $c = cwd();
</span><br>
<span class="quotelev2">&gt;&gt;      Debug(&quot;Making dir: $dir (cwd: $c)\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -58,6 +65,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;      foreach my $p (@parts) {
</span><br>
<span class="quotelev2">&gt;&gt;          next if (! $p);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +        $p = make_safe_filename($p)
</span><br>
<span class="quotelev2">&gt;&gt; +            if ($safe);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;          $str .= &quot;$p&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;          if (! -d $str) {
</span><br>
<span class="quotelev2">&gt;&gt;              Debug(&quot;$str does not exist -- creating\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -402,6 +412,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;      return 1;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -------
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;  # Copy infile or stdin to a unique file in /tmp
</span><br>
<span class="quotelev2">&gt;&gt;  sub copyfile {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -432,4 +444,64 @@
</span><br>
<span class="quotelev2">&gt;&gt;      return $outfile;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -------
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +sub load_dumpfile {
</span><br>
<span class="quotelev2">&gt;&gt; +    my ($filename, $data) = @_;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # Check that the file is there
</span><br>
<span class="quotelev2">&gt;&gt; +    return
</span><br>
<span class="quotelev2">&gt;&gt; +        if (! -r $filename);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # Get the file size
</span><br>
<span class="quotelev2">&gt;&gt; +    my ($dev, $ino, $mode, $nlink, $uid, $gid, $rdev, $size,
</span><br>
<span class="quotelev2">&gt;&gt; +        $atime, $mtime, $ctime, $blksize, $blocks) = stat 
</span><br>
<span class="quotelev2">&gt;&gt; ($filename);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # Read it in
</span><br>
<span class="quotelev2">&gt;&gt; +    open IN, $filename;
</span><br>
<span class="quotelev2">&gt;&gt; +    my $tmp;
</span><br>
<span class="quotelev2">&gt;&gt; +    read(IN, $tmp, $size);
</span><br>
<span class="quotelev2">&gt;&gt; +    close IN;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # It's in Dumper format.  How many $VARx's are there?
</span><br>
<span class="quotelev2">&gt;&gt; +    return
</span><br>
<span class="quotelev2">&gt;&gt; +        if (! $tmp =~ m/\$VAR[0-9]+/g);
</span><br>
<span class="quotelev2">&gt;&gt; +    my $count = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +    ++$count
</span><br>
<span class="quotelev2">&gt;&gt; +        while ($tmp =~ m/\$VAR[0-9]+/g);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # We know how many $VARx's there are.  Build up a string to  
</span><br>
<span class="quotelev2">&gt;&gt; eval.
</span><br>
<span class="quotelev2">&gt;&gt; +    my $str;
</span><br>
<span class="quotelev2">&gt;&gt; +    my $var_num = 1;
</span><br>
<span class="quotelev2">&gt;&gt; +    while ($var_num &lt;= $count) {
</span><br>
<span class="quotelev2">&gt;&gt; +        $str .= &quot;my \$VAR$var_num;\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +        ++$var_num;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    $str .= &quot;eval \$tmp;\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +    my $var_num = 1;
</span><br>
<span class="quotelev2">&gt;&gt; +    while ($var_num &lt;= $count) {
</span><br>
<span class="quotelev2">&gt;&gt; +        $str .= &quot;\$\$data-&gt;{VAR$var_num} = \$VAR$var_num;\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +        ++$var_num;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    eval $str;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -------
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +sub save_dumpfile {
</span><br>
<span class="quotelev2">&gt;&gt; +    my ($filename) = @_;
</span><br>
<span class="quotelev2">&gt;&gt; +    shift;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # Serialize
</span><br>
<span class="quotelev2">&gt;&gt; +    my $d = new Data::Dumper([@_]);
</span><br>
<span class="quotelev2">&gt;&gt; +    $d-&gt;Purity(1)-&gt;Indent(1);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    open FILE, &quot;&gt;$filename.new&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +    print FILE $d-&gt;Dump;
</span><br>
<span class="quotelev2">&gt;&gt; +    close FILE;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # Atomically move it onto the old file
</span><br>
<span class="quotelev2">&gt;&gt; +    rename(&quot;$filename.new&quot;, $filename);
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;  1;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/lib/MTT/MPI.pm
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/lib/MTT/MPI.pm	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/lib/MTT/MPI.pm	2006-11-30 07:55:07 EST (Thu, 30 Nov 2006)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -15,10 +15,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;  package MTT::MPI;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  use strict;
</span><br>
<span class="quotelev2">&gt;&gt; -use XML::Simple qw(:strict);
</span><br>
<span class="quotelev2">&gt;&gt;  use MTT::MPI::Get;
</span><br>
<span class="quotelev2">&gt;&gt;  use MTT::MPI::Install;
</span><br>
<span class="quotelev2">&gt;&gt; -use Data::Dumper;
</span><br>
<span class="quotelev2">&gt;&gt; +use MTT::Files;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -31,16 +30,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  # Filename where list of MPI sources is kept
</span><br>
<span class="quotelev2">&gt;&gt; -my $sources_data_filename = &quot;mpi_sources.xml&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -# XML options for the MPI sources
</span><br>
<span class="quotelev2">&gt;&gt; -my $sources_xs;
</span><br>
<span class="quotelev2">&gt;&gt; +my $sources_data_filename = &quot;mpi_sources.dump&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  # Filename where list of MPI installs is kept
</span><br>
<span class="quotelev2">&gt;&gt; -my $installs_data_filename = &quot;mpi_installs.xml&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -# XML options for the MPI installs
</span><br>
<span class="quotelev2">&gt;&gt; -my $installs_xs;
</span><br>
<span class="quotelev2">&gt;&gt; +my $installs_data_filename = &quot;mpi_installs.dump&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -60,65 +53,17 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -sub _scrub {
</span><br>
<span class="quotelev2">&gt;&gt; -    my $h = shift;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    foreach my $k (keys(%$h)) {
</span><br>
<span class="quotelev2">&gt;&gt; -        if (ref($h-&gt;{$k}) eq &quot;&quot;) {
</span><br>
<span class="quotelev2">&gt;&gt; -            # Remove bad characters
</span><br>
<span class="quotelev2">&gt;&gt; -            $h-&gt;{$k} =~ s/\000/&lt;NULL&gt;/g;
</span><br>
<span class="quotelev2">&gt;&gt; -        } else {
</span><br>
<span class="quotelev2">&gt;&gt; -            _scrub($h-&gt;{$k});
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; - 
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -sub _setup_sources_xml {
</span><br>
<span class="quotelev2">&gt;&gt; -    $sources_xs = new XML::Simple(KeyAttr =&gt; { mpi_get =&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;simple_section_name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                               mpi_version =&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;version&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                           },
</span><br>
<span class="quotelev2">&gt;&gt; -                                  ForceArray =&gt; [ &quot;mpi_get&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                                  &quot;mpi_version&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                                  ],
</span><br>
<span class="quotelev2">&gt;&gt; -                                  AttrIndent =&gt; 1,
</span><br>
<span class="quotelev2">&gt;&gt; -                                  RootName =&gt; &quot;mpi_sources&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                  );
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; - 
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; +use Data::Dumper;
</span><br>
<span class="quotelev2">&gt;&gt;  sub LoadSources {
</span><br>
<span class="quotelev2">&gt;&gt;      my ($dir) = @_;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      # Explicitly delete anything that was there
</span><br>
<span class="quotelev2">&gt;&gt;      $MTT::MPI::sources = undef;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    _setup_sources_xml()
</span><br>
<span class="quotelev2">&gt;&gt; -        if (!$sources_xs);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;      # If the file exists, read it in
</span><br>
<span class="quotelev2">&gt;&gt; -    if (-f &quot;$dir/$sources_data_filename&quot;) {
</span><br>
<span class="quotelev2">&gt;&gt; -        my $in = $sources_xs-&gt;XMLin(&quot;$dir/$sources_data_filename&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        # Now transform this to the form suitable for
</span><br>
<span class="quotelev2">&gt;&gt; -        # $MTT::MPI::sources (see comment in SaveSources)
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        # For each MPI get section
</span><br>
<span class="quotelev2">&gt;&gt; -        foreach my $mpi_get_key (keys(%{$in-&gt;{mpi_get}})) {
</span><br>
<span class="quotelev2">&gt;&gt; -            my $mpi_get = $in-&gt;{mpi_get}-&gt;{$mpi_get_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -            # For each version
</span><br>
<span class="quotelev2">&gt;&gt; -            foreach my $mpi_version_key (keys(%{$mpi_get-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {mpi_version}})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                my $mpi_version = $mpi_get-&gt;{mpi_version}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_version_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                $MTT::MPI::sources-&gt;{$mpi_get_key}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_version_key} = $mpi_version;
</span><br>
<span class="quotelev2">&gt;&gt; -                $MTT::MPI::sources-&gt;{$mpi_get_key}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_version_key}-&gt;{simple_section_name} = $mpi_get_key;
</span><br>
<span class="quotelev2">&gt;&gt; -                $MTT::MPI::sources-&gt;{$mpi_get_key}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_version_key}-&gt;{version} = $mpi_version_key;
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; +    my $data;
</span><br>
<span class="quotelev2">&gt;&gt; +    MTT::Files::load_dumpfile(&quot;$dir/$sources_data_filename&quot;, \ 
</span><br>
<span class="quotelev2">&gt;&gt; $data);
</span><br>
<span class="quotelev2">&gt;&gt; +    $MTT::MPI::sources = $data-&gt;{VAR1};
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; @@ -126,54 +71,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;  sub SaveSources {
</span><br>
<span class="quotelev2">&gt;&gt;      my ($dir) = @_;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    _setup_sources_xml()
</span><br>
<span class="quotelev2">&gt;&gt; -        if (!$sources_xs);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    # Transform $MTT::MPI::sources to something XML::Simple can  
</span><br>
<span class="quotelev2">&gt;&gt; write
</span><br>
<span class="quotelev2">&gt;&gt; -    # into valid XML (since our values can [and will] contain :'s,
</span><br>
<span class="quotelev2">&gt;&gt; -    # which are the namespace identifiers in XML)
</span><br>
<span class="quotelev2">&gt;&gt; -    my $transformed;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    # For each MPI get section
</span><br>
<span class="quotelev2">&gt;&gt; -    foreach my $mpi_get_key (keys(%$MTT::MPI::sources)) {
</span><br>
<span class="quotelev2">&gt;&gt; -        my $mpi_get = $MTT::MPI::sources-&gt;{$mpi_get_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        # For each version
</span><br>
<span class="quotelev2">&gt;&gt; -        foreach my $mpi_version_key (keys(%$mpi_get)) {
</span><br>
<span class="quotelev2">&gt;&gt; -            my $mpi_version = $mpi_get-&gt;{$mpi_version_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -            # Deep copy and scrub
</span><br>
<span class="quotelev2">&gt;&gt; -            my $h;
</span><br>
<span class="quotelev2">&gt;&gt; -            %$h = %$mpi_version;
</span><br>
<span class="quotelev2">&gt;&gt; -            _scrub($h);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -            $transformed-&gt;{mpi_get}-&gt;{$mpi_get_key}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {mpi_version}-&gt;{$mpi_version_key} = $h;
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    # Write out the file
</span><br>
<span class="quotelev2">&gt;&gt; -    my $xml = $sources_xs-&gt;XMLout($transformed);
</span><br>
<span class="quotelev2">&gt;&gt; -    my $file = &quot;$dir/$sources_data_filename&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -    open(FILE, &quot;&gt;$file.new&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -    print FILE $xml;
</span><br>
<span class="quotelev2">&gt;&gt; -    close(FILE);
</span><br>
<span class="quotelev2">&gt;&gt; -    system(&quot;mv $file.new $file&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; - 
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -sub _setup_installs_xml {
</span><br>
<span class="quotelev2">&gt;&gt; -    $installs_xs = new XML::Simple(KeyAttr =&gt; { mpi_get =&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;simple_section_name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                                mpi_version =&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;version&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                                mpi_install =&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;simple_section_name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                            },
</span><br>
<span class="quotelev2">&gt;&gt; -                                   ForceArray =&gt; [ &quot;mpi_get&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                                   &quot;mpi_version&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                                   &quot;mpi_install&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                                   ],
</span><br>
<span class="quotelev2">&gt;&gt; -                                   AttrIndent =&gt; 1,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   RootName =&gt; &quot;mpi_installs&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   );
</span><br>
<span class="quotelev2">&gt;&gt; +    MTT::Files::save_dumpfile(&quot;$dir/$sources_data_filename&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                              $MTT::MPI::sources);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; @@ -184,33 +83,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;      # Explicitly delete anything that was there
</span><br>
<span class="quotelev2">&gt;&gt;      $MTT::MPI::installs = undef;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    _setup_installs_xml()
</span><br>
<span class="quotelev2">&gt;&gt; -        if (!$installs_xs);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;      # If the file exists, read it in
</span><br>
<span class="quotelev2">&gt;&gt; -    if (-f &quot;$dir/$installs_data_filename&quot;) {
</span><br>
<span class="quotelev2">&gt;&gt; -        my $in = $installs_xs-&gt;XMLin(&quot;$dir/ 
</span><br>
<span class="quotelev2">&gt;&gt; $installs_data_filename&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        # Now transform this to the form suitable for
</span><br>
<span class="quotelev2">&gt;&gt; -        # $MTT::MPI::installs (see comment in SaveSources).  Wow.
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        # For each MPI get section
</span><br>
<span class="quotelev2">&gt;&gt; -        foreach my $mpi_get_key (keys(%{$in-&gt;{mpi_get}})) {
</span><br>
<span class="quotelev2">&gt;&gt; -            my $mpi_get = $in-&gt;{mpi_get}-&gt;{$mpi_get_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -            # For each version of each MPI get
</span><br>
<span class="quotelev2">&gt;&gt; -            foreach my $mpi_version_key (keys(%{$mpi_get-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {mpi_version}})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                my $mpi_version = $mpi_get-&gt;{mpi_version}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_version_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                # For each MPI install section
</span><br>
<span class="quotelev2">&gt;&gt; -                foreach my $mpi_install_key (keys(%{$mpi_version-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {mpi_install}})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    $MTT::MPI::installs-&gt;{$mpi_get_key}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_version_key}-&gt;{$mpi_install_key} =
</span><br>
<span class="quotelev2">&gt;&gt; -                        $in-&gt;{mpi_get}-&gt;{$mpi_get_key}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {mpi_version}-&gt;{$mpi_version_key}-&gt;{mpi_install}-&gt;{$mpi_install_key};
</span><br>
<span class="quotelev2">&gt;&gt; -                    $MTT::MPI::installs-&gt;{$mpi_get_key}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_version_key}-&gt;{$mpi_install_key}-&gt;{simple_section_name} =  
</span><br>
<span class="quotelev2">&gt;&gt; $mpi_install_key;
</span><br>
<span class="quotelev2">&gt;&gt; -                }
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; +    my $data;
</span><br>
<span class="quotelev2">&gt;&gt; +    MTT::Files::load_dumpfile(&quot;$dir/$installs_data_filename&quot;, \ 
</span><br>
<span class="quotelev2">&gt;&gt; $data);
</span><br>
<span class="quotelev2">&gt;&gt; +    $MTT::MPI::installs = $data-&gt;{VAR1};
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; @@ -218,42 +94,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;  sub SaveInstalls {
</span><br>
<span class="quotelev2">&gt;&gt;      my ($dir) = @_;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    _setup_installs_xml()
</span><br>
<span class="quotelev2">&gt;&gt; -        if (!$installs_xs);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    # Transform $MTT::MPI::installs to something XML::Simple can  
</span><br>
<span class="quotelev2">&gt;&gt; write
</span><br>
<span class="quotelev2">&gt;&gt; -    # into valid XML (see comment in SaveSources).  Wow.
</span><br>
<span class="quotelev2">&gt;&gt; -    my $transformed;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    # For each MPI get section
</span><br>
<span class="quotelev2">&gt;&gt; -    foreach my $mpi_get_key (keys(%{$MTT::MPI::installs})) {
</span><br>
<span class="quotelev2">&gt;&gt; -        my $mpi_get = $MTT::MPI::installs-&gt;{$mpi_get_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        # For each version of that get
</span><br>
<span class="quotelev2">&gt;&gt; -        foreach my $mpi_version_key (keys(%{$mpi_get})) {
</span><br>
<span class="quotelev2">&gt;&gt; -            my $mpi_version = $mpi_get-&gt;{$mpi_version_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -            # For each MPI install action
</span><br>
<span class="quotelev2">&gt;&gt; -            foreach my $mpi_install_key (keys(%{$mpi_version})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                my $mpi_install = $mpi_version-&gt;{$mpi_install_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                # Deep copy and scrub
</span><br>
<span class="quotelev2">&gt;&gt; -                my $h;
</span><br>
<span class="quotelev2">&gt;&gt; -                %$h = %$mpi_install;
</span><br>
<span class="quotelev2">&gt;&gt; -                _scrub($h);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                $transformed-&gt;{mpi_get}-&gt;{$mpi_get_key}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {mpi_version}-&gt;{$mpi_version_key}-&gt;{mpi_install}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_install_key} = $h;
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    # Write out the file
</span><br>
<span class="quotelev2">&gt;&gt; -    my $xml = $installs_xs-&gt;XMLout($transformed);
</span><br>
<span class="quotelev2">&gt;&gt; -    my $file = &quot;$dir/$installs_data_filename&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -    open(FILE, &quot;&gt;$file.new&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -    print FILE $xml;
</span><br>
<span class="quotelev2">&gt;&gt; -    close(FILE);
</span><br>
<span class="quotelev2">&gt;&gt; -    system(&quot;mv $file.new $file&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +    MTT::Files::save_dumpfile(&quot;$dir/$installs_data_filename&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                              $MTT::MPI::installs);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  1;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/lib/MTT/Test.pm
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/lib/MTT/Test.pm	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/lib/MTT/Test.pm	2006-11-30 07:55:07 EST (Thu, 30 Nov 2006)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -13,11 +13,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;  package MTT::Test;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  use strict;
</span><br>
<span class="quotelev2">&gt;&gt; +use File::Find;
</span><br>
<span class="quotelev2">&gt;&gt;  use MTT::Test::Get;
</span><br>
<span class="quotelev2">&gt;&gt;  use MTT::Test::Build;
</span><br>
<span class="quotelev2">&gt;&gt;  use MTT::Test::Run;
</span><br>
<span class="quotelev2">&gt;&gt; -use XML::Simple;
</span><br>
<span class="quotelev2">&gt;&gt; -use Data::Dumper;
</span><br>
<span class="quotelev2">&gt;&gt; +use MTT::Files;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -29,26 +29,24 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  # Exported run tests handle
</span><br>
<span class="quotelev2">&gt;&gt;  our $runs;
</span><br>
<span class="quotelev2">&gt;&gt; +our $runs_to_be_saved;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  # Filename where list of test sources information is kept
</span><br>
<span class="quotelev2">&gt;&gt; -my $sources_data_filename = &quot;test_sources.xml&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -# XML options for the test builds
</span><br>
<span class="quotelev2">&gt;&gt; -my $sources_xs;
</span><br>
<span class="quotelev2">&gt;&gt; +my $sources_data_filename = &quot;test_sources.dump&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  # Filename where list of test build information is kept
</span><br>
<span class="quotelev2">&gt;&gt; -my $builds_data_filename = &quot;test_builds.xml&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +my $builds_data_filename = &quot;test_builds.dump&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -# XML options for the test builds
</span><br>
<span class="quotelev2">&gt;&gt; -my $builds_xs;
</span><br>
<span class="quotelev2">&gt;&gt; +# Subdir where test runs are kept
</span><br>
<span class="quotelev2">&gt;&gt; +my $runs_subdir = &quot;test_runs&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  # Filename where list of test run information is kept
</span><br>
<span class="quotelev2">&gt;&gt; -my $runs_data_filename = &quot;test_runs.xml&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +my $runs_data_filename = &quot;test_runs.dump&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -# XML options for the test runs
</span><br>
<span class="quotelev2">&gt;&gt; -my $runs_xs;
</span><br>
<span class="quotelev2">&gt;&gt; +# Helper variable for when we're loading test run data
</span><br>
<span class="quotelev2">&gt;&gt; +my $load_run_file_start_dir;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -76,57 +74,16 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -sub _scrub {
</span><br>
<span class="quotelev2">&gt;&gt; -    my $h = shift;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    foreach my $k (keys(%$h)) {
</span><br>
<span class="quotelev2">&gt;&gt; -        if (ref($h-&gt;{$k}) eq &quot;&quot;) {
</span><br>
<span class="quotelev2">&gt;&gt; -            # Remove bad characters
</span><br>
<span class="quotelev2">&gt;&gt; -            $h-&gt;{$k} =~ s/\000/&lt;NULL&gt;/g;
</span><br>
<span class="quotelev2">&gt;&gt; -        } else {
</span><br>
<span class="quotelev2">&gt;&gt; -            _scrub($h-&gt;{$k});
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; - 
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -sub _setup_sources_xml {
</span><br>
<span class="quotelev2">&gt;&gt; -    $sources_xs = new XML::Simple(KeyAttr =&gt; { test_get =&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;simple_section_name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                           },
</span><br>
<span class="quotelev2">&gt;&gt; -                                  ForceArray =&gt; [ &quot;test_get&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                                  ],
</span><br>
<span class="quotelev2">&gt;&gt; -                                  AttrIndent =&gt; 1,
</span><br>
<span class="quotelev2">&gt;&gt; -                                  RootName =&gt; &quot;test_sources&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                  );
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; - 
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;  sub LoadSources {
</span><br>
<span class="quotelev2">&gt;&gt;      my ($dir) = @_;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      # Explicitly delete anything that was there
</span><br>
<span class="quotelev2">&gt;&gt;      $MTT::Test::sources = undef;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    _setup_sources_xml()
</span><br>
<span class="quotelev2">&gt;&gt; -        if (!$sources_xs);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;      # If the file exists, read it in
</span><br>
<span class="quotelev2">&gt;&gt; -    if (-f &quot;$dir/$sources_data_filename&quot;) {
</span><br>
<span class="quotelev2">&gt;&gt; -        my $in = $sources_xs-&gt;XMLin(&quot;$dir/$sources_data_filename&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        # Now transform this to the form suitable for
</span><br>
<span class="quotelev2">&gt;&gt; -        # $MTT::Test::sources (see comment in SaveSources)
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        # For each Test get section
</span><br>
<span class="quotelev2">&gt;&gt; -        foreach my $test_get_key (keys(%{$in-&gt;{test_get}})) {
</span><br>
<span class="quotelev2">&gt;&gt; -            my $test_get = $in-&gt;{test_get}-&gt;{$test_get_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -            $MTT::Test::sources-&gt;{$test_get_key} = $test_get;
</span><br>
<span class="quotelev2">&gt;&gt; -            $MTT::Test::sources-&gt;{$test_get_key}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {simple_section_name} = $test_get_key;
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; +    my $data;
</span><br>
<span class="quotelev2">&gt;&gt; +    MTT::Files::load_dumpfile(&quot;$dir/$sources_data_filename&quot;, \ 
</span><br>
<span class="quotelev2">&gt;&gt; $data);
</span><br>
<span class="quotelev2">&gt;&gt; +    $MTT::Test::sources = $data-&gt;{VAR1};
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; @@ -134,51 +91,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;  sub SaveSources {
</span><br>
<span class="quotelev2">&gt;&gt;      my ($dir) = @_;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    _setup_sources_xml()
</span><br>
<span class="quotelev2">&gt;&gt; -        if (!$sources_xs);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    # Transform $MTT::Test::sources to something XML::Simple can  
</span><br>
<span class="quotelev2">&gt;&gt; write
</span><br>
<span class="quotelev2">&gt;&gt; -    # into valid XML (since our values can [and will] contain :'s,
</span><br>
<span class="quotelev2">&gt;&gt; -    # which are the namespace identifiers in XML)
</span><br>
<span class="quotelev2">&gt;&gt; -    my $transformed;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    # For each Test get section
</span><br>
<span class="quotelev2">&gt;&gt; -    foreach my $test_get_key (keys(%$MTT::Test::sources)) {
</span><br>
<span class="quotelev2">&gt;&gt; -        my $test_get = $MTT::Test::sources-&gt;{$test_get_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        # Deep copy and scrub
</span><br>
<span class="quotelev2">&gt;&gt; -        my $h;
</span><br>
<span class="quotelev2">&gt;&gt; -        %$h = %$test_get;
</span><br>
<span class="quotelev2">&gt;&gt; -        _scrub($h);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        $transformed-&gt;{test_get}-&gt;{$test_get_key} = $h;
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    # Write out the file
</span><br>
<span class="quotelev2">&gt;&gt; -    my $xml = $sources_xs-&gt;XMLout($transformed);
</span><br>
<span class="quotelev2">&gt;&gt; -    my $file = &quot;$dir/$sources_data_filename&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -    open(FILE, &quot;&gt;$file.new&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -    print FILE $xml;
</span><br>
<span class="quotelev2">&gt;&gt; -    close(FILE);
</span><br>
<span class="quotelev2">&gt;&gt; -    system(&quot;mv $file.new $file&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; - 
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -sub _setup_builds_xml {
</span><br>
<span class="quotelev2">&gt;&gt; -    $builds_xs = new XML::Simple(KeyAttr =&gt; { mpi_get =&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;simple_section_name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                              mpi_version =&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;version&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                              mpi_install =&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;simple_section_name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                              test_build =&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;simple_section_name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                            },
</span><br>
<span class="quotelev2">&gt;&gt; -                                   ForceArray =&gt; [ &quot;mpi_get&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                                   &quot;mpi_version&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                                   &quot;mpi_install&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                                   &quot;test_build&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                                   ],
</span><br>
<span class="quotelev2">&gt;&gt; -                                   AttrIndent =&gt; 1,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   RootName =&gt; &quot;test_builds&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   );
</span><br>
<span class="quotelev2">&gt;&gt; +    MTT::Files::save_dumpfile(&quot;$dir/$sources_data_filename&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                              $MTT::Test::sources);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; @@ -189,39 +103,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;      # Explicitly delete anything that was there
</span><br>
<span class="quotelev2">&gt;&gt;      $MTT::Test::builds = undef;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    _setup_builds_xml()
</span><br>
<span class="quotelev2">&gt;&gt; -        if (!$builds_xs);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;      # If the file exists, read it in
</span><br>
<span class="quotelev2">&gt;&gt; -    if (-f &quot;$dir/$builds_data_filename&quot;) {
</span><br>
<span class="quotelev2">&gt;&gt; -        my $in = $builds_xs-&gt;XMLin(&quot;$dir/$builds_data_filename&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        # Now transform this to the form suitable for
</span><br>
<span class="quotelev2">&gt;&gt; -        # $MTT::Test::builds (see comment in SaveSources).  Wow.
</span><br>
<span class="quotelev2">&gt;&gt; -        # For each MPI get section
</span><br>
<span class="quotelev2">&gt;&gt; -        foreach my $mpi_get_key (keys(%{$in-&gt;{mpi_get}})) {
</span><br>
<span class="quotelev2">&gt;&gt; -            my $mpi_get = $in-&gt;{mpi_get}-&gt;{$mpi_get_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -            # For each version of that MPI
</span><br>
<span class="quotelev2">&gt;&gt; -            foreach my $mpi_version_key (keys(%{$mpi_get-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {mpi_version}})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                my $mpi_version = $mpi_get-&gt;{mpi_version}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_version_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                # For each MPI install section
</span><br>
<span class="quotelev2">&gt;&gt; -                foreach my $mpi_install_key (keys(%{$mpi_version-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {mpi_install}})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    my $mpi_install = $mpi_version-&gt;{mpi_install}- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;{$mpi_install_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                    # For each test build section
</span><br>
<span class="quotelev2">&gt;&gt; -                    foreach my $test_build_key (keys(% 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_install-&gt;{test_build}})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                        my $test_build = $mpi_install-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {test_build}-&gt;{$test_build_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                        $MTT::Test::builds-&gt;{$mpi_get_key}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_version_key}-&gt;{$mpi_install_key}-&gt;{$test_build_key} =
</span><br>
<span class="quotelev2">&gt;&gt; -                            $in-&gt;{mpi_get}-&gt;{$mpi_get_key}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {mpi_version}-&gt;{$mpi_version_key}-&gt;{mpi_install}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_install_key}-&gt;{test_build}-&gt;{$test_build_key};
</span><br>
<span class="quotelev2">&gt;&gt; -                        $MTT::Test::builds-&gt;{$mpi_get_key}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_version_key}-&gt;{$mpi_install_key}-&gt;{$test_build_key}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {simple_section_name} = $test_build_key;
</span><br>
<span class="quotelev2">&gt;&gt; -                    }
</span><br>
<span class="quotelev2">&gt;&gt; -                }
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; +    my $data;
</span><br>
<span class="quotelev2">&gt;&gt; +    MTT::Files::load_dumpfile(&quot;$dir/$builds_data_filename&quot;, \$data);
</span><br>
<span class="quotelev2">&gt;&gt; +    $MTT::Test::builds = $data-&gt;{VAR1};
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; @@ -229,135 +114,48 @@
</span><br>
<span class="quotelev2">&gt;&gt;  sub SaveBuilds {
</span><br>
<span class="quotelev2">&gt;&gt;      my ($dir) = @_;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    _setup_builds_xml()
</span><br>
<span class="quotelev2">&gt;&gt; -        if (!$builds_xs);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    # Transform $MTT::Test::builds to something XML::Simple can  
</span><br>
<span class="quotelev2">&gt;&gt; write
</span><br>
<span class="quotelev2">&gt;&gt; -    # into valid XML (see comment in SaveSources).  Wow.
</span><br>
<span class="quotelev2">&gt;&gt; -    my $transformed;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    # For each MPI get section
</span><br>
<span class="quotelev2">&gt;&gt; -    foreach my $mpi_get_key (keys(%{$MTT::Test::builds})) {
</span><br>
<span class="quotelev2">&gt;&gt; -        my $mpi_get = $MTT::Test::builds-&gt;{$mpi_get_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        # For each version of that MPI
</span><br>
<span class="quotelev2">&gt;&gt; -        foreach my $mpi_version_key (keys(%{$mpi_get})) {
</span><br>
<span class="quotelev2">&gt;&gt; -            my $mpi_version = $mpi_get-&gt;{$mpi_version_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -            # For each MPI install section
</span><br>
<span class="quotelev2">&gt;&gt; -            foreach my $mpi_install_key (keys(%{$mpi_version})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                my $mpi_install = $mpi_version-&gt;{$mpi_install_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                # For each test build section
</span><br>
<span class="quotelev2">&gt;&gt; -                foreach my $test_build_key (keys(%{$mpi_install})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    my $test_build = $mpi_install-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$test_build_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                    # Deep copy and scrub
</span><br>
<span class="quotelev2">&gt;&gt; -                    my $h;
</span><br>
<span class="quotelev2">&gt;&gt; -                    %$h = %$test_build;
</span><br>
<span class="quotelev2">&gt;&gt; -                    _scrub($h);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                    $transformed-&gt;{mpi_get}-&gt;{$mpi_get_key}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {mpi_version}-&gt;{$mpi_version_key}-&gt;{mpi_install}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_install_key}-&gt;{test_build}-&gt;{$test_build_key} = $h;
</span><br>
<span class="quotelev2">&gt;&gt; -                }
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    # Write out the file
</span><br>
<span class="quotelev2">&gt;&gt; -    my $xml = $builds_xs-&gt;XMLout($transformed);
</span><br>
<span class="quotelev2">&gt;&gt; -    my $file = &quot;$dir/$builds_data_filename&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -    open(FILE, &quot;&gt;$file.new&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -    print FILE $xml;
</span><br>
<span class="quotelev2">&gt;&gt; -    close(FILE);
</span><br>
<span class="quotelev2">&gt;&gt; -    system(&quot;mv $file.new $file&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; - 
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -sub _setup_runs_xml {
</span><br>
<span class="quotelev2">&gt;&gt; -    $runs_xs = new XML::Simple(KeyAttr =&gt; { mpi_get =&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;simple_section_name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                            mpi_version =&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;version&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                            mpi_install =&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;simple_section_name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                            test_build =&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;simple_section_name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                            test_run =&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;simple_section_name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                            test_name =&gt; &quot;name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                            test_np =&gt; &quot;nprocs&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                            test_cmd =&gt; &quot;argv&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                        },
</span><br>
<span class="quotelev2">&gt;&gt; -                               ForceArray =&gt; [ &quot;mpi_get&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                               &quot;mpi_version&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                               &quot;mpi_install&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                               &quot;test_build&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                               &quot;test_run&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                               &quot;test_name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                               &quot;test_np&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                               &quot;test_cmd&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                                               ],
</span><br>
<span class="quotelev2">&gt;&gt; -                               AttrIndent =&gt; 1,
</span><br>
<span class="quotelev2">&gt;&gt; -                               RootName =&gt; &quot;test_runs&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                               );
</span><br>
<span class="quotelev2">&gt;&gt; +    MTT::Files::save_dumpfile(&quot;$dir/$builds_data_filename&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                              $MTT::Test::builds);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +use Data::Dumper;
</span><br>
<span class="quotelev2">&gt;&gt;  sub LoadRuns {
</span><br>
<span class="quotelev2">&gt;&gt;      my ($dir) = @_;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      # Explicitly delete anything that was there
</span><br>
<span class="quotelev2">&gt;&gt;      $MTT::Test::runs = undef;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    _setup_runs_xml()
</span><br>
<span class="quotelev2">&gt;&gt; -        if (!$runs_xs);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    # If the file exists, read it in
</span><br>
<span class="quotelev2">&gt;&gt; -    if (-f &quot;$dir/$runs_data_filename&quot;) {
</span><br>
<span class="quotelev2">&gt;&gt; -        my $in = $runs_xs-&gt;XMLin(&quot;$dir/$runs_data_filename&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        # Now transform this to the form suitable for
</span><br>
<span class="quotelev2">&gt;&gt; -        # $MTT::Test::runs (see comment in SaveSources).  Wow.
</span><br>
<span class="quotelev2">&gt;&gt; -        # For each MPI get section
</span><br>
<span class="quotelev2">&gt;&gt; -        foreach my $mpi_get_key (keys(%{$in-&gt;{mpi_get}})) {
</span><br>
<span class="quotelev2">&gt;&gt; -            my $mpi_get = $in-&gt;{mpi_get}-&gt;{$mpi_get_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -            # For each MPI source
</span><br>
<span class="quotelev2">&gt;&gt; -            foreach my $mpi_version_key (keys(%{$mpi_get-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {mpi_version}})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                my $mpi_version = $mpi_get-&gt;{mpi_version}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_version_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                # For each MPI install section
</span><br>
<span class="quotelev2">&gt;&gt; -                foreach my $mpi_install_key (keys(%{$mpi_version-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {mpi_install}})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    my $mpi_install = $mpi_version-&gt;{mpi_install}- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;{$mpi_install_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                    # For each test build section
</span><br>
<span class="quotelev2">&gt;&gt; -                    foreach my $test_build_key (keys(% 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_install-&gt;{test_build}})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                        my $test_build = $mpi_install-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {test_build}-&gt;{$test_build_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                        # For each test run section
</span><br>
<span class="quotelev2">&gt;&gt; -                        foreach my $test_run_key (keys(% 
</span><br>
<span class="quotelev2">&gt;&gt; {$test_build-&gt;{test_run}})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                            my $test_run = $test_build-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {test_run}-&gt;{$test_run_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                            # For each test name
</span><br>
<span class="quotelev2">&gt;&gt; -                            foreach my $test_name_key (keys(% 
</span><br>
<span class="quotelev2">&gt;&gt; {$test_run-&gt;{test_name}})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                                my $test_name = $test_run-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {test_name}-&gt;{$test_name_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                                # For each np
</span><br>
<span class="quotelev2">&gt;&gt; -                                foreach my $test_np_key (keys(% 
</span><br>
<span class="quotelev2">&gt;&gt; {$test_name-&gt;{test_np}})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                                    my $test_np = $test_name-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {test_np}-&gt;{$test_np_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                                    # For each test command
</span><br>
<span class="quotelev2">&gt;&gt; -                                    foreach my $test_cmd_key (keys 
</span><br>
<span class="quotelev2">&gt;&gt; (%{$test_np-&gt;{test_cmd}})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                                        my $test_cmd = $test_np-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {test_cmd}-&gt;{$test_cmd_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                                        $MTT::Test::runs-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_get_key}-&gt;{$mpi_version_key}-&gt;{$mpi_install_key}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$test_build_key}-&gt;{$test_run_key}-&gt;{$test_name_key}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$test_np_key}-&gt;{$test_cmd_key} =
</span><br>
<span class="quotelev2">&gt;&gt; -                                            $in-&gt;{mpi_get}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_get_key}-&gt;{mpi_version}-&gt;{$mpi_version_key}-&gt;{mpi_install}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_install_key}-&gt;{test_build}-&gt;{$test_build_key}-&gt;{test_run}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$test_run_key}-&gt;{test_name}-&gt;{$test_name_key}-&gt;{test_np}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$test_np_key}-&gt;{test_cmd}-&gt;{$test_cmd_key};
</span><br>
<span class="quotelev2">&gt;&gt; -                                    }
</span><br>
<span class="quotelev2">&gt;&gt; -                                }
</span><br>
<span class="quotelev2">&gt;&gt; -                            }
</span><br>
<span class="quotelev2">&gt;&gt; -                        }
</span><br>
<span class="quotelev2">&gt;&gt; -                    }
</span><br>
<span class="quotelev2">&gt;&gt; -                }
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; +    # See SaveRuns, below, for an explanation.  We traverse
</span><br>
<span class="quotelev2">&gt;&gt; +    # directories looking for dump files and read them into the
</span><br>
<span class="quotelev2">&gt;&gt; +    # appropriate section of the $MTT::Test::runs hash.
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    $load_run_file_start_dir = &quot;$dir/$runs_subdir&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +    find(\&amp;load_run_file, $load_run_file_start_dir)
</span><br>
<span class="quotelev2">&gt;&gt; +        if (-d $load_run_file_start_dir);
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +sub load_run_file {
</span><br>
<span class="quotelev2">&gt;&gt; +    # We only want files named $runs_data_filename
</span><br>
<span class="quotelev2">&gt;&gt; +    return 0
</span><br>
<span class="quotelev2">&gt;&gt; +        if (! -f $_ || $runs_data_filename ne $_);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # Read in the file
</span><br>
<span class="quotelev2">&gt;&gt; +    my $data;
</span><br>
<span class="quotelev2">&gt;&gt; +    MTT::Files::load_dumpfile($File::Find::name, \$data);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # Put the loaded data in the hash in the right place.  Per
</span><br>
<span class="quotelev2">&gt;&gt; +    # SaveRuns(), below, we look at the key values in $data-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {VAR1} to
</span><br>
<span class="quotelev2">&gt;&gt; +    # know where to put $data-&gt;{VAR2} in the $MTT::Test::runs hash.
</span><br>
<span class="quotelev2">&gt;&gt; +    my $str = &quot;\$MTT::Test::runs&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +    my $k = 1;
</span><br>
<span class="quotelev2">&gt;&gt; +    do {
</span><br>
<span class="quotelev2">&gt;&gt; +        $str .= &quot;-&gt;{\&quot;&quot; . $data-&gt;{VAR1}-&gt;{$k} . &quot;\&quot;}&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +        ++$k;
</span><br>
<span class="quotelev2">&gt;&gt; +    } while (exists($data-&gt;{VAR1}-&gt;{$k}));
</span><br>
<span class="quotelev2">&gt;&gt; +    $str .= &quot; = \$data-&gt;{VAR2}&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +    eval $str;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; @@ -365,15 +163,25 @@
</span><br>
<span class="quotelev2">&gt;&gt;  sub SaveRuns {
</span><br>
<span class="quotelev2">&gt;&gt;      my ($dir) = @_;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    _setup_runs_xml()
</span><br>
<span class="quotelev2">&gt;&gt; -        if (!$runs_xs);
</span><br>
<span class="quotelev2">&gt;&gt; +    # Because test run data can get very, very large, we break it up
</span><br>
<span class="quotelev2">&gt;&gt; +    # and store it in lots of smaller files so that we can write out
</span><br>
<span class="quotelev2">&gt;&gt; +    # to disk in small portions.
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # Test runs are stored in the hash with this order of keys:
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # mpi_get_simple_section_name
</span><br>
<span class="quotelev2">&gt;&gt; +    # mpi_version
</span><br>
<span class="quotelev2">&gt;&gt; +    # mpi_install_simple_section_name
</span><br>
<span class="quotelev2">&gt;&gt; +    # test_build_simple_section_name
</span><br>
<span class="quotelev2">&gt;&gt; +    # test_run_simple_section_name
</span><br>
<span class="quotelev2">&gt;&gt; +    # test_name
</span><br>
<span class="quotelev2">&gt;&gt; +    # np
</span><br>
<span class="quotelev2">&gt;&gt; +    # command
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    # Transform $MTT::Test::runs to something XML::Simple can write
</span><br>
<span class="quotelev2">&gt;&gt; -    # into valid XML (see comment in SaveSources).  Wow.
</span><br>
<span class="quotelev2">&gt;&gt; -    my $transformed;
</span><br>
<span class="quotelev2">&gt;&gt; +    # We save from test_name and down in a single file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      # For each MPI get section
</span><br>
<span class="quotelev2">&gt;&gt; -    foreach my $mpi_get_key (keys(%{$MTT::Test::runs})) {
</span><br>
<span class="quotelev2">&gt;&gt; +    foreach my $mpi_get_key (keys(% 
</span><br>
<span class="quotelev2">&gt;&gt; {$MTT::Test::runs_to_be_saved})) {
</span><br>
<span class="quotelev2">&gt;&gt;          my $mpi_get = $MTT::Test::runs-&gt;{$mpi_get_key};
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          # For each source of that MPI
</span><br>
<span class="quotelev2">&gt;&gt; @@ -395,23 +203,22 @@
</span><br>
<span class="quotelev2">&gt;&gt;                          # For each test name
</span><br>
<span class="quotelev2">&gt;&gt;                          foreach my $test_name_key (keys(% 
</span><br>
<span class="quotelev2">&gt;&gt; {$test_run})) {
</span><br>
<span class="quotelev2">&gt;&gt;                              my $test_name = $test_run-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$test_name_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                            # For each np
</span><br>
<span class="quotelev2">&gt;&gt; -                            foreach my $test_np_key (keys(% 
</span><br>
<span class="quotelev2">&gt;&gt; {$test_name})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                                my $test_np = $test_name-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$test_np_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                                # For each cmd
</span><br>
<span class="quotelev2">&gt;&gt; -                                foreach my $test_cmd_key (keys(% 
</span><br>
<span class="quotelev2">&gt;&gt; {$test_np})) {
</span><br>
<span class="quotelev2">&gt;&gt; -                                    my $test_cmd = $test_np-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$test_cmd_key};
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                                    # Deep copy and scrub
</span><br>
<span class="quotelev2">&gt;&gt; -                                    my $h;
</span><br>
<span class="quotelev2">&gt;&gt; -                                    %$h = %$test_cmd;
</span><br>
<span class="quotelev2">&gt;&gt; -                                    _scrub($h);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -                                    $transformed-&gt;{mpi_get}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_get_key}-&gt;{mpi_version}-&gt;{$mpi_version_key}-&gt;{mpi_install}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_install_key}-&gt;{test_build}-&gt;{$test_build_key}-&gt;{test_run}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$test_run_key}-&gt;{test_name}-&gt;{$test_name_key}-&gt;{test_np}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$test_np_key}-&gt;{test_cmd}-&gt;{$test_cmd_key} = $h;
</span><br>
<span class="quotelev2">&gt;&gt; -                                }
</span><br>
<span class="quotelev2">&gt;&gt; -                            }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +                            my $file = MTT::Files::safe_mkdir 
</span><br>
<span class="quotelev2">&gt;&gt; (&quot;$dir/$runs_subdir/$mpi_get_key/$mpi_version_key/$mpi_install_key/ 
</span><br>
<span class="quotelev2">&gt;&gt; $test_build_key/$test_run_key/$test_name_key&quot;) . &quot;/ 
</span><br>
<span class="quotelev2">&gt;&gt; $runs_data_filename&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +                            # We need to save two items in test run
</span><br>
<span class="quotelev2">&gt;&gt; +                            # data files -- the actual data and  
</span><br>
<span class="quotelev2">&gt;&gt; where
</span><br>
<span class="quotelev2">&gt;&gt; +                            # it belongs in the $MTT::Test::runs  
</span><br>
<span class="quotelev2">&gt;&gt; hash.
</span><br>
<span class="quotelev2">&gt;&gt; +                            my $hashname = {
</span><br>
<span class="quotelev2">&gt;&gt; +                                1 =&gt; $mpi_get_key,
</span><br>
<span class="quotelev2">&gt;&gt; +                                2 =&gt; $mpi_version_key,
</span><br>
<span class="quotelev2">&gt;&gt; +                                3 =&gt; $mpi_install_key,
</span><br>
<span class="quotelev2">&gt;&gt; +                                4 =&gt; $test_build_key,
</span><br>
<span class="quotelev2">&gt;&gt; +                                5 =&gt; $test_run_key,
</span><br>
<span class="quotelev2">&gt;&gt; +                                6 =&gt; $test_name_key,
</span><br>
<span class="quotelev2">&gt;&gt; +                            };
</span><br>
<span class="quotelev2">&gt;&gt; +                            MTT::Files::save_dumpfile($file,  
</span><br>
<span class="quotelev2">&gt;&gt; $hashname,
</span><br>
<span class="quotelev2">&gt;&gt; +                                                      $test_name);
</span><br>
<span class="quotelev2">&gt;&gt;                          }
</span><br>
<span class="quotelev2">&gt;&gt;                      }
</span><br>
<span class="quotelev2">&gt;&gt;                  }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -419,13 +226,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    # Write out the file
</span><br>
<span class="quotelev2">&gt;&gt; -    my $xml = $runs_xs-&gt;XMLout($transformed);
</span><br>
<span class="quotelev2">&gt;&gt; -    my $file = &quot;$dir/$runs_data_filename&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; -    open(FILE, &quot;&gt;$file.new&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -    print FILE $xml;
</span><br>
<span class="quotelev2">&gt;&gt; -    close(FILE);
</span><br>
<span class="quotelev2">&gt;&gt; -    system(&quot;mv $file.new $file&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +    # Explicitly reset the test runs to be saved
</span><br>
<span class="quotelev2">&gt;&gt; +    $MTT::Test::runs_to_be_saved = undef;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  1;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/lib/MTT/Test/RunEngine.pm
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/lib/MTT/Test/RunEngine.pm	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/lib/MTT/Test/RunEngine.pm	2006-11-30 07:55:07 EST (Thu,  
</span><br>
<span class="quotelev2">&gt;&gt; 30 Nov 2006)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -67,6 +67,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;              }
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;          ++$count;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        # Write out the &quot;to be saved&quot; test run results
</span><br>
<span class="quotelev2">&gt;&gt; +        MTT::Test::SaveRuns($top_dir);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          # Output a progress bar
</span><br>
<span class="quotelev2">&gt;&gt;          if ($verbose_out &gt; 50) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -189,8 +192,21 @@
</span><br>
<span class="quotelev2">&gt;&gt;      # Assume that the Analyze module will output one line
</span><br>
<span class="quotelev2">&gt;&gt;      ++$verbose_out;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    $MTT::Test::runs-&gt;{$mpi_details-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {mpi_get_simple_section_name}}-&gt;{$mpi_details-&gt;{version}}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_details-&gt;{mpi_install_simple_section_name}}-&gt;{$run-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {test_build_simple_section_name}}-&gt;{$run-&gt;{simple_section_name}}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$name}-&gt;{$MTT::Test::Run::test_np}-&gt;{$cmd} = $report;
</span><br>
<span class="quotelev2">&gt;&gt; -    MTT::Test::SaveRuns($top_dir);
</span><br>
<span class="quotelev2">&gt;&gt; +    # For Test Runs data, we have two datasets: the &quot;to be saved&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; set
</span><br>
<span class="quotelev2">&gt;&gt; +    # and the &quot;all results&quot; set.  The &quot;to be saved&quot; set is a
</span><br>
<span class="quotelev2">&gt;&gt; +    # relatively small set of data that is written out to disk
</span><br>
<span class="quotelev2">&gt;&gt; +    # periodically (i.e., augmenting what has already been written
</span><br>
<span class="quotelev2">&gt;&gt; +    # out).  The &quot;all results&quot; set is everything that has  
</span><br>
<span class="quotelev2">&gt;&gt; occurred so
</span><br>
<span class="quotelev2">&gt;&gt; +    # far.  We do this because the &quot;all results&quot; set can get *very*
</span><br>
<span class="quotelev2">&gt;&gt; +    # large, so we don't want to write out the whole thing every  
</span><br>
<span class="quotelev2">&gt;&gt; time
</span><br>
<span class="quotelev2">&gt;&gt; +    # we save the results to disk.
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    # So save this new result in both the &quot;to be saved&quot; and &quot;all
</span><br>
<span class="quotelev2">&gt;&gt; +    # results&quot; sets.  We'll write out the &quot;to be saved&quot; results
</span><br>
<span class="quotelev2">&gt;&gt; +    # shortly.
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    $MTT::Test::runs_to_be_saved-&gt;{$mpi_details-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {mpi_get_simple_section_name}}-&gt;{$mpi_details-&gt;{version}}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_details-&gt;{mpi_install_simple_section_name}}-&gt;{$run-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {test_build_simple_section_name}}-&gt;{$run-&gt;{simple_section_name}}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$name}-&gt;{$MTT::Test::Run::test_np}-&gt;{$cmd} =
</span><br>
<span class="quotelev2">&gt;&gt; +        $MTT::Test::runs-&gt;{$mpi_details-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {mpi_get_simple_section_name}}-&gt;{$mpi_details-&gt;{version}}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$mpi_details-&gt;{mpi_install_simple_section_name}}-&gt;{$run-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {test_build_simple_section_name}}-&gt;{$run-&gt;{simple_section_name}}-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {$name}-&gt;{$MTT::Test::Run::test_np}-&gt;{$cmd} = $report;
</span><br>
<span class="quotelev2">&gt;&gt;      MTT::Reporter::QueueAdd(&quot;Test Run&quot;, $run-&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {simple_section_name}, $report);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      # If there is an after_each step, run it
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/12/0235.php">Tim Mattox: "[MTT users] Ignore failed v1.1.3b1 builds on Odin today..."</a>
<li><strong>Previous message:</strong> <a href="0233.php">Ethan Mallove: "Re: [MTT users] [MTT svn] svn:mtt-svn r461"</a>
<li><strong>In reply to:</strong> <a href="0233.php">Ethan Mallove: "Re: [MTT users] [MTT svn] svn:mtt-svn r461"</a>
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
