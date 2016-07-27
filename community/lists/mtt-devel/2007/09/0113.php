<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 20 11:48:54 2007" -->
<!-- isoreceived="20070920154854" -->
<!-- sent="Thu, 20 Sep 2007 11:48:49 -0400" -->
<!-- isosent="20070920154849" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1033 (commit to	www.open-mpi.org?)" -->
<!-- id="20070920154849.GE11675_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7CA1C86A-9F8D-4CF2-B451-C6F0D92AFF25_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-09-20 11:48:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0114.php">Jeff Squyres: "[MTT devel] 2nd cut at MTT web site"</a>
<li><strong>Previous message:</strong> <a href="0112.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1033 (commit to www.open-mpi.org?)"</a>
<li><strong>In reply to:</strong> <a href="0112.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1033 (commit to www.open-mpi.org?)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>I put a scripty-foo to lessen the burden of synchronizing an
<br>
MTT checkout with the ompi-www repository. I used it on my
<br>
last two commits to ompi-www, and it saved me some time.
<br>
<p>&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/mtt/browser/trunk/server/tools/commit-to-ompi-www.pl">https://svn.open-mpi.org/trac/mtt/browser/trunk/server/tools/commit-to-ompi-www.pl</a>
<br>
<p>Usage:
<br>
<p>&nbsp;&nbsp;$ commit-to-ompi-www.pl --mtt-dir $HOME/mtt/trunk/server/php --ompi-www-dir $HOME/ompi-www/trunk/mtt/ --verbose
<br>
<p>The script does the following:
<br>
<p>&nbsp;&nbsp;1. Gathers a list of versioned files from the mtt working
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;copy
<br>
&nbsp;&nbsp;2. Copies the files over to an ompi-www/mtt working copy
<br>
&nbsp;&nbsp;3. Displays &quot;svn diff&quot; on the revised ompi-www working
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;copy, and prompts user with &quot;Commit? (y/n)&quot;
<br>
&nbsp;&nbsp;4. Prompts user to &quot;Commit changes to live ompi-www
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;website? (y/n)&quot; 
<br>
<p>-Ethan
<br>
<p><p>On Thu, Sep/20/2007 11:08:35AM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; oops Looks like I forgot to commit this the other day. I just did so  
</span><br>
<span class="quotelev1">&gt; for the live site and it should be active now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the reminder.
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 20, 2007, at 10:50 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Josh,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Did you not want to commit this to the live website?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Sep/19/2007 09:42:36AM, jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Author: jjhursey
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: 2007-09-19 09:42:36 EDT (Wed, 19 Sep 2007)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; New Revision: 1033
</span><br>
<span class="quotelev3">&gt; &gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1033">https://svn.open-mpi.org/trac/mtt/changeset/1033</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Stats are collected midnight to midnight.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Also if we have to guess an mpi_install_id or test_build_id  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; because the client
</span><br>
<span class="quotelev3">&gt; &gt;&gt; did not submit a valid one then point it to an 'invalid' tuple.  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This keeps us
</span><br>
<span class="quotelev3">&gt; &gt;&gt; from corrupting the database by guessing wrong. Adjust the schema  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; so that it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; inserts 'undef' values at tuple 0 that we can point to.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    trunk/server/php/submit/index.php          |    16 ++++-
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    trunk/server/sql/v3/schemas-v3.sql         |   115 +++++++++++++ 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ++++++++++++++++++++++++++
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    trunk/server/sql/v3/stats/collect-stats.pl |     3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    3 files changed, 128 insertions(+), 6 deletions(-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Modified: trunk/server/php/submit/index.php
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =========
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- trunk/server/php/submit/index.php	(original)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ trunk/server/php/submit/index.php	2007-09-19 09:42:36 EDT  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (Wed, 19 Sep 2007)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -714,7 +714,9 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      if(!isset($test_build_id) ||
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         0 == strlen($test_build_id) ||
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         !preg_match(&quot;/^\d+$/&quot;, $test_build_id, $m) ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -        $test_build_id = find_test_build_id();
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        # We could guess using: $test_build_id =  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; find_test_build_id();
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        # But we should probably just pint it to an invalid row  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for safety.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        $test_build_id = 0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          $error_output .= (&quot;-------------------------------\n&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                            &quot;Invalid test_build_id  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ($orig_test_build_id) given. &quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                            &quot;Guessing that it should be  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $test_build_id \n&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -729,7 +731,9 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                          &quot;test_build_id = '&quot;.$test_build_id.&quot;'&quot;);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          $valid_id = select_scalar($select_stmt);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          if( !isset($valid_id) ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -            $test_build_id = find_test_build_id();
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +            # We could guess using: $test_build_id =  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; find_test_build_id();
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +            # But we should probably just pint it to an invalid  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; row for safety.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +            $test_build_id = 0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              $error_output .= (&quot;-------------------------------\n&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                &quot;Invalid test_build_id  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ($orig_test_build_id) given. &quot; .
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                &quot;Guessing that it should be  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $test_build_id \n&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -876,7 +880,9 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      if(!isset($mpi_install_id) ||
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         0 == strlen($mpi_install_id) ||
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         !preg_match(&quot;/^\d+$/&quot;, $orig_mpi_install_id, $m) ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -        $mpi_install_id = find_mpi_install_id();
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        # We could guess using: $mpi_install_id =  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; find_mpi_install_id();
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        # But we should probably just pint it to an invalid row  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for safety.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        $mpi_install_id = 0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          $error_output .= (&quot;-------------------------------\n&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                            &quot;Invalid mpi_install_id  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ($orig_mpi_install_id) given. &quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                            &quot;Guessing that it should be  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $mpi_install_id .\n&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -893,7 +899,9 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          $valid_id = select_scalar($select_stmt);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          if( !isset($valid_id) ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -            $mpi_install_id = find_mpi_install_id();
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +            # We could guess using: $mpi_install_id =  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; find_mpi_install_id();
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +            # But we should probably just pint it to an invalid  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; row for safety.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +            $mpi_install_id = 0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              $error_output .= (&quot;-------------------------------\n&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                &quot;Invalid mpi_install_id  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ($orig_mpi_install_id) given. &quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                &quot;Guessing that it should be  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $mpi_install_id \n&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Modified: trunk/server/sql/v3/schemas-v3.sql
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =========
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- trunk/server/sql/v3/schemas-v3.sql	(original)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ trunk/server/sql/v3/schemas-v3.sql	2007-09-19 09:42:36 EDT  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (Wed, 19 Sep 2007)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -56,6 +56,8 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      PRIMARY KEY (compute_cluster_id)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  );
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +-- An invlid row in case we need it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +INSERT INTO compute_cluster VALUES ('0', 'undef', 'undef',  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 'undef', 'undef', 'undef');
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  -- Submit Table
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -75,6 +77,8 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      PRIMARY KEY (submit_id)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  );
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +-- An invlid row in case we need it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +INSERT INTO submit VALUES ('0', 'undef', 'undef', 'undef', 'undef');
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  -- Compiler Table
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -95,7 +99,8 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      PRIMARY KEY (compiler_id)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  );
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +-- An invlid row in case we need it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +INSERT INTO compiler VALUES ('0', 'undef', 'undef');
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  -- MPI Get Table
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -116,6 +121,8 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      PRIMARY KEY (mpi_get_id)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  );
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +-- An invlid row in case we need it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +INSERT INTO mpi_get VALUES ('0', 'undef', 'undef');
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  -- Results: Description Normalization table
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -140,6 +147,8 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      PRIMARY KEY (result_message_id)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  );
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +-- Insert an invalid tuple in case we need it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +INSERT INTO result_message VALUES('0', 'undef');
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  -- Results: Environment Normalization table
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -191,6 +200,8 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      PRIMARY KEY (mpi_install_configure_id)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  );
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +-- An invlid row in case we need it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +INSERT INTO mpi_install_configure_args VALUES ('0', DEFAULT,  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; DEFAULT, DEFAULT, 'undef');
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  -- Collect 'results' data into a table for easy updating
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -251,6 +262,50 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      FOREIGN KEY (result_message_id) REFERENCES result_message 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (result_message_id)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  ) INHERITS(results_fields);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +-- An invlid row in case we need it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +INSERT INTO mpi_install
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +   (description_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    start_timestamp,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    test_result,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    trial,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    submit_timestamp,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    duration,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    environment_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    result_stdout,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    result_stderr,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    result_message_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    merge_stdout_stderr,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    exit_value,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    exit_signal,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    client_serial,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    submit_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    compute_cluster_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    mpi_install_compiler_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    mpi_get_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    mpi_install_configure_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    mpi_install_id
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +   ) VALUES (
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '1',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    TIMESTAMP '2006-11-01',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '1',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    DEFAULT,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    TIMESTAMP '2006-11-01',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    INTERVAL '1',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    'undef',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    'undef',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    DEFAULT,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    DEFAULT,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    DEFAULT,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +   );
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  -- Test Suite Table
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -269,6 +324,9 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      PRIMARY KEY (test_suite_id)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  );
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +-- An invalid tuple if we need it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +INSERT INTO test_suites VALUES ('0', 'undef', 'undef');
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  -- Ind. Test Name Table
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -293,6 +351,8 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      FOREIGN KEY (test_suite_id) REFERENCES test_suites 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (test_suite_id)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  );
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +-- An invalid tuple if we need it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +INSERT INTO test_names VALUES('0', '0', 'undef', 'undef');
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  -- Test Build Table
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -327,6 +387,59 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      FOREIGN KEY (result_message_id) REFERENCES result_message 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (result_message_id)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  ) INHERITS(results_fields);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +-- An invlid row in case we need it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +INSERT INTO test_build
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +   (description_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    start_timestamp,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    test_result,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    trial,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    submit_timestamp,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    duration,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    environment_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    result_stdout,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    result_stderr,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    result_message_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    merge_stdout_stderr,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    exit_value,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    exit_signal,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    client_serial,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    submit_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    compute_cluster_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    mpi_install_compiler_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    mpi_get_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    mpi_install_configure_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    mpi_install_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    test_suite_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    test_build_compiler_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    test_build_id
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +   ) VALUES (
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '1',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    TIMESTAMP '2006-11-01',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '1',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    DEFAULT,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    TIMESTAMP '2006-11-01',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    INTERVAL '1',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    'undef',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    'undef',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    DEFAULT,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    DEFAULT,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    DEFAULT,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0',
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    '0'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +   );
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  -- Latency/Bandwidth Table
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Modified: trunk/server/sql/v3/stats/collect-stats.pl
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =========
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- trunk/server/sql/v3/stats/collect-stats.pl	(original)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ trunk/server/sql/v3/stats/collect-stats.pl	2007-09-19 09:42:36  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; EDT (Wed, 19 Sep 2007)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -361,7 +361,8 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    #
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    # Render time segments
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    #
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -  my $time_24_cycle = &quot; 21:00:00&quot;; # 9 pm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +  #my $time_24_cycle = &quot; 21:00:00&quot;; # 9 pm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +  my $time_24_cycle = &quot; 23:59:59&quot;; # Midnight
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    my $epoch = &quot;2006-11-24 &quot; . $time_24_cycle;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    ($today, $yesterday)         = get_times_today();
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    ($days_epoch, $months_epoch) = get_times_epoch($epoch, $today);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-svn mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0114.php">Jeff Squyres: "[MTT devel] 2nd cut at MTT web site"</a>
<li><strong>Previous message:</strong> <a href="0112.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1033 (commit to www.open-mpi.org?)"</a>
<li><strong>In reply to:</strong> <a href="0112.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1033 (commit to www.open-mpi.org?)"</a>
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
