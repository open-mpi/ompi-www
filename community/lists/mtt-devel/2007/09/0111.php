<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 20 10:50:34 2007" -->
<!-- isoreceived="20070920145034" -->
<!-- sent="Thu, 20 Sep 2007 10:50:28 -0400" -->
<!-- isosent="20070920145028" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1033 (commit to www.open-mpi.org?)" -->
<!-- id="20070920145028.GD11675_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200709191342.l8JDgap3000686_at_sourcehaven.osl.iu.edu" -->
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
<strong>Date:</strong> 2007-09-20 10:50:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0112.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1033 (commit to www.open-mpi.org?)"</a>
<li><strong>Previous message:</strong> <a href="0110.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: sun)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0112.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1033 (commit to www.open-mpi.org?)"</a>
<li><strong>Reply:</strong> <a href="0112.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1033 (commit to www.open-mpi.org?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh,
<br>
<p>Did you not want to commit this to the live website?
<br>
<p>-Ethan
<br>
<p><p>On Wed, Sep/19/2007 09:42:36AM, jjhursey_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: jjhursey
</span><br>
<span class="quotelev1">&gt; Date: 2007-09-19 09:42:36 EDT (Wed, 19 Sep 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 1033
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1033">https://svn.open-mpi.org/trac/mtt/changeset/1033</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Stats are collected midnight to midnight.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also if we have to guess an mpi_install_id or test_build_id because the client
</span><br>
<span class="quotelev1">&gt; did not submit a valid one then point it to an 'invalid' tuple. This keeps us
</span><br>
<span class="quotelev1">&gt; from corrupting the database by guessing wrong. Adjust the schema so that it
</span><br>
<span class="quotelev1">&gt; inserts 'undef' values at tuple 0 that we can point to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/server/php/submit/index.php          |    16 ++++-                                   
</span><br>
<span class="quotelev1">&gt;    trunk/server/sql/v3/schemas-v3.sql         |   115 +++++++++++++++++++++++++++++++++++++++ 
</span><br>
<span class="quotelev1">&gt;    trunk/server/sql/v3/stats/collect-stats.pl |     3                                         
</span><br>
<span class="quotelev1">&gt;    3 files changed, 128 insertions(+), 6 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/server/php/submit/index.php
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/server/php/submit/index.php	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/server/php/submit/index.php	2007-09-19 09:42:36 EDT (Wed, 19 Sep 2007)
</span><br>
<span class="quotelev1">&gt; @@ -714,7 +714,9 @@
</span><br>
<span class="quotelev1">&gt;      if(!isset($test_build_id) ||
</span><br>
<span class="quotelev1">&gt;         0 == strlen($test_build_id) ||
</span><br>
<span class="quotelev1">&gt;         !preg_match(&quot;/^\d+$/&quot;, $test_build_id, $m) ) {
</span><br>
<span class="quotelev1">&gt; -        $test_build_id = find_test_build_id();
</span><br>
<span class="quotelev1">&gt; +        # We could guess using: $test_build_id = find_test_build_id();
</span><br>
<span class="quotelev1">&gt; +        # But we should probably just pint it to an invalid row for safety.
</span><br>
<span class="quotelev1">&gt; +        $test_build_id = 0;
</span><br>
<span class="quotelev1">&gt;          $error_output .= (&quot;-------------------------------\n&quot;.
</span><br>
<span class="quotelev1">&gt;                            &quot;Invalid test_build_id ($orig_test_build_id) given. &quot;.
</span><br>
<span class="quotelev1">&gt;                            &quot;Guessing that it should be $test_build_id \n&quot;.
</span><br>
<span class="quotelev1">&gt; @@ -729,7 +731,9 @@
</span><br>
<span class="quotelev1">&gt;                          &quot;test_build_id = '&quot;.$test_build_id.&quot;'&quot;);
</span><br>
<span class="quotelev1">&gt;          $valid_id = select_scalar($select_stmt);
</span><br>
<span class="quotelev1">&gt;          if( !isset($valid_id) ) {
</span><br>
<span class="quotelev1">&gt; -            $test_build_id = find_test_build_id();
</span><br>
<span class="quotelev1">&gt; +            # We could guess using: $test_build_id = find_test_build_id();
</span><br>
<span class="quotelev1">&gt; +            # But we should probably just pint it to an invalid row for safety.
</span><br>
<span class="quotelev1">&gt; +            $test_build_id = 0;
</span><br>
<span class="quotelev1">&gt;              $error_output .= (&quot;-------------------------------\n&quot;.
</span><br>
<span class="quotelev1">&gt;                                &quot;Invalid test_build_id ($orig_test_build_id) given. &quot; .
</span><br>
<span class="quotelev1">&gt;                                &quot;Guessing that it should be $test_build_id \n&quot;.
</span><br>
<span class="quotelev1">&gt; @@ -876,7 +880,9 @@
</span><br>
<span class="quotelev1">&gt;      if(!isset($mpi_install_id) ||
</span><br>
<span class="quotelev1">&gt;         0 == strlen($mpi_install_id) ||
</span><br>
<span class="quotelev1">&gt;         !preg_match(&quot;/^\d+$/&quot;, $orig_mpi_install_id, $m) ) {
</span><br>
<span class="quotelev1">&gt; -        $mpi_install_id = find_mpi_install_id();
</span><br>
<span class="quotelev1">&gt; +        # We could guess using: $mpi_install_id = find_mpi_install_id();
</span><br>
<span class="quotelev1">&gt; +        # But we should probably just pint it to an invalid row for safety.
</span><br>
<span class="quotelev1">&gt; +        $mpi_install_id = 0;
</span><br>
<span class="quotelev1">&gt;          $error_output .= (&quot;-------------------------------\n&quot;.
</span><br>
<span class="quotelev1">&gt;                            &quot;Invalid mpi_install_id ($orig_mpi_install_id) given. &quot;.
</span><br>
<span class="quotelev1">&gt;                            &quot;Guessing that it should be $mpi_install_id .\n&quot;.
</span><br>
<span class="quotelev1">&gt; @@ -893,7 +899,9 @@
</span><br>
<span class="quotelev1">&gt;          $valid_id = select_scalar($select_stmt);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;          if( !isset($valid_id) ) {
</span><br>
<span class="quotelev1">&gt; -            $mpi_install_id = find_mpi_install_id();
</span><br>
<span class="quotelev1">&gt; +            # We could guess using: $mpi_install_id = find_mpi_install_id();
</span><br>
<span class="quotelev1">&gt; +            # But we should probably just pint it to an invalid row for safety.
</span><br>
<span class="quotelev1">&gt; +            $mpi_install_id = 0;
</span><br>
<span class="quotelev1">&gt;              $error_output .= (&quot;-------------------------------\n&quot;.
</span><br>
<span class="quotelev1">&gt;                                &quot;Invalid mpi_install_id ($orig_mpi_install_id) given. &quot;.
</span><br>
<span class="quotelev1">&gt;                                &quot;Guessing that it should be $mpi_install_id \n&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/server/sql/v3/schemas-v3.sql
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/server/sql/v3/schemas-v3.sql	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/server/sql/v3/schemas-v3.sql	2007-09-19 09:42:36 EDT (Wed, 19 Sep 2007)
</span><br>
<span class="quotelev1">&gt; @@ -56,6 +56,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      PRIMARY KEY (compute_cluster_id)
</span><br>
<span class="quotelev1">&gt;  );
</span><br>
<span class="quotelev1">&gt; +-- An invlid row in case we need it
</span><br>
<span class="quotelev1">&gt; +INSERT INTO compute_cluster VALUES ('0', 'undef', 'undef', 'undef', 'undef', 'undef');
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  -- Submit Table
</span><br>
<span class="quotelev1">&gt; @@ -75,6 +77,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      PRIMARY KEY (submit_id)
</span><br>
<span class="quotelev1">&gt;  );
</span><br>
<span class="quotelev1">&gt; +-- An invlid row in case we need it
</span><br>
<span class="quotelev1">&gt; +INSERT INTO submit VALUES ('0', 'undef', 'undef', 'undef', 'undef');
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  -- Compiler Table
</span><br>
<span class="quotelev1">&gt; @@ -95,7 +99,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      PRIMARY KEY (compiler_id)
</span><br>
<span class="quotelev1">&gt;  );
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +-- An invlid row in case we need it
</span><br>
<span class="quotelev1">&gt; +INSERT INTO compiler VALUES ('0', 'undef', 'undef');
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  -- MPI Get Table
</span><br>
<span class="quotelev1">&gt; @@ -116,6 +121,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      PRIMARY KEY (mpi_get_id)
</span><br>
<span class="quotelev1">&gt;  );
</span><br>
<span class="quotelev1">&gt; +-- An invlid row in case we need it
</span><br>
<span class="quotelev1">&gt; +INSERT INTO mpi_get VALUES ('0', 'undef', 'undef');
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  -- Results: Description Normalization table
</span><br>
<span class="quotelev1">&gt; @@ -140,6 +147,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      PRIMARY KEY (result_message_id)
</span><br>
<span class="quotelev1">&gt;  );
</span><br>
<span class="quotelev1">&gt; +-- Insert an invalid tuple in case we need it.
</span><br>
<span class="quotelev1">&gt; +INSERT INTO result_message VALUES('0', 'undef');
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  -- Results: Environment Normalization table
</span><br>
<span class="quotelev1">&gt; @@ -191,6 +200,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      PRIMARY KEY (mpi_install_configure_id)
</span><br>
<span class="quotelev1">&gt;  );
</span><br>
<span class="quotelev1">&gt; +-- An invlid row in case we need it
</span><br>
<span class="quotelev1">&gt; +INSERT INTO mpi_install_configure_args VALUES ('0', DEFAULT, DEFAULT, DEFAULT, 'undef');
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  -- Collect 'results' data into a table for easy updating
</span><br>
<span class="quotelev1">&gt; @@ -251,6 +262,50 @@
</span><br>
<span class="quotelev1">&gt;      FOREIGN KEY (result_message_id) REFERENCES result_message(result_message_id)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  ) INHERITS(results_fields);
</span><br>
<span class="quotelev1">&gt; +-- An invlid row in case we need it
</span><br>
<span class="quotelev1">&gt; +INSERT INTO mpi_install 
</span><br>
<span class="quotelev1">&gt; +   (description_id, 
</span><br>
<span class="quotelev1">&gt; +    start_timestamp, 
</span><br>
<span class="quotelev1">&gt; +    test_result, 
</span><br>
<span class="quotelev1">&gt; +    trial, 
</span><br>
<span class="quotelev1">&gt; +    submit_timestamp, 
</span><br>
<span class="quotelev1">&gt; +    duration, 
</span><br>
<span class="quotelev1">&gt; +    environment_id, 
</span><br>
<span class="quotelev1">&gt; +    result_stdout, 
</span><br>
<span class="quotelev1">&gt; +    result_stderr, 
</span><br>
<span class="quotelev1">&gt; +    result_message_id, 
</span><br>
<span class="quotelev1">&gt; +    merge_stdout_stderr, 
</span><br>
<span class="quotelev1">&gt; +    exit_value, 
</span><br>
<span class="quotelev1">&gt; +    exit_signal, 
</span><br>
<span class="quotelev1">&gt; +    client_serial, 
</span><br>
<span class="quotelev1">&gt; +    submit_id, 
</span><br>
<span class="quotelev1">&gt; +    compute_cluster_id, 
</span><br>
<span class="quotelev1">&gt; +    mpi_install_compiler_id, 
</span><br>
<span class="quotelev1">&gt; +    mpi_get_id, 
</span><br>
<span class="quotelev1">&gt; +    mpi_install_configure_id, 
</span><br>
<span class="quotelev1">&gt; +    mpi_install_id
</span><br>
<span class="quotelev1">&gt; +   ) VALUES (
</span><br>
<span class="quotelev1">&gt; +    '1',
</span><br>
<span class="quotelev1">&gt; +    TIMESTAMP '2006-11-01',
</span><br>
<span class="quotelev1">&gt; +    '1',
</span><br>
<span class="quotelev1">&gt; +    DEFAULT,
</span><br>
<span class="quotelev1">&gt; +    TIMESTAMP '2006-11-01',
</span><br>
<span class="quotelev1">&gt; +    INTERVAL '1',
</span><br>
<span class="quotelev1">&gt; +    '0',
</span><br>
<span class="quotelev1">&gt; +    'undef',
</span><br>
<span class="quotelev1">&gt; +    'undef',
</span><br>
<span class="quotelev1">&gt; +    '0',
</span><br>
<span class="quotelev1">&gt; +    DEFAULT,
</span><br>
<span class="quotelev1">&gt; +    '0',
</span><br>
<span class="quotelev1">&gt; +    DEFAULT,
</span><br>
<span class="quotelev1">&gt; +    DEFAULT,
</span><br>
<span class="quotelev1">&gt; +    '0',
</span><br>
<span class="quotelev1">&gt; +    '0',
</span><br>
<span class="quotelev1">&gt; +    '0',
</span><br>
<span class="quotelev1">&gt; +    '0',
</span><br>
<span class="quotelev1">&gt; +    '0',
</span><br>
<span class="quotelev1">&gt; +    '0'
</span><br>
<span class="quotelev1">&gt; +   );
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  -- Test Suite Table
</span><br>
<span class="quotelev1">&gt; @@ -269,6 +324,9 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      PRIMARY KEY (test_suite_id)
</span><br>
<span class="quotelev1">&gt;  );
</span><br>
<span class="quotelev1">&gt; +-- An invalid tuple if we need it
</span><br>
<span class="quotelev1">&gt; +INSERT INTO test_suites VALUES ('0', 'undef', 'undef');
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  -- Ind. Test Name Table
</span><br>
<span class="quotelev1">&gt; @@ -293,6 +351,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      FOREIGN KEY (test_suite_id) REFERENCES test_suites(test_suite_id)
</span><br>
<span class="quotelev1">&gt;  );
</span><br>
<span class="quotelev1">&gt; +-- An invalid tuple if we need it
</span><br>
<span class="quotelev1">&gt; +INSERT INTO test_names VALUES('0', '0', 'undef', 'undef');
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  -- Test Build Table
</span><br>
<span class="quotelev1">&gt; @@ -327,6 +387,59 @@
</span><br>
<span class="quotelev1">&gt;      FOREIGN KEY (result_message_id) REFERENCES result_message(result_message_id)
</span><br>
<span class="quotelev1">&gt;  ) INHERITS(results_fields);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +-- An invlid row in case we need it
</span><br>
<span class="quotelev1">&gt; +INSERT INTO test_build 
</span><br>
<span class="quotelev1">&gt; +   (description_id, 
</span><br>
<span class="quotelev1">&gt; +    start_timestamp, 
</span><br>
<span class="quotelev1">&gt; +    test_result, 
</span><br>
<span class="quotelev1">&gt; +    trial, 
</span><br>
<span class="quotelev1">&gt; +    submit_timestamp, 
</span><br>
<span class="quotelev1">&gt; +    duration, 
</span><br>
<span class="quotelev1">&gt; +    environment_id, 
</span><br>
<span class="quotelev1">&gt; +    result_stdout, 
</span><br>
<span class="quotelev1">&gt; +    result_stderr, 
</span><br>
<span class="quotelev1">&gt; +    result_message_id, 
</span><br>
<span class="quotelev1">&gt; +    merge_stdout_stderr, 
</span><br>
<span class="quotelev1">&gt; +    exit_value, 
</span><br>
<span class="quotelev1">&gt; +    exit_signal, 
</span><br>
<span class="quotelev1">&gt; +    client_serial, 
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    submit_id, 
</span><br>
<span class="quotelev1">&gt; +    compute_cluster_id, 
</span><br>
<span class="quotelev1">&gt; +    mpi_install_compiler_id, 
</span><br>
<span class="quotelev1">&gt; +    mpi_get_id, 
</span><br>
<span class="quotelev1">&gt; +    mpi_install_configure_id, 
</span><br>
<span class="quotelev1">&gt; +    mpi_install_id,
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    test_suite_id,
</span><br>
<span class="quotelev1">&gt; +    test_build_compiler_id,
</span><br>
<span class="quotelev1">&gt; +    test_build_id
</span><br>
<span class="quotelev1">&gt; +   ) VALUES (
</span><br>
<span class="quotelev1">&gt; +    '1',
</span><br>
<span class="quotelev1">&gt; +    TIMESTAMP '2006-11-01',
</span><br>
<span class="quotelev1">&gt; +    '1',
</span><br>
<span class="quotelev1">&gt; +    DEFAULT,
</span><br>
<span class="quotelev1">&gt; +    TIMESTAMP '2006-11-01',
</span><br>
<span class="quotelev1">&gt; +    INTERVAL '1',
</span><br>
<span class="quotelev1">&gt; +    '0',
</span><br>
<span class="quotelev1">&gt; +    'undef',
</span><br>
<span class="quotelev1">&gt; +    'undef',
</span><br>
<span class="quotelev1">&gt; +    '0',
</span><br>
<span class="quotelev1">&gt; +    DEFAULT,
</span><br>
<span class="quotelev1">&gt; +    '0',
</span><br>
<span class="quotelev1">&gt; +    DEFAULT,
</span><br>
<span class="quotelev1">&gt; +    DEFAULT,
</span><br>
<span class="quotelev1">&gt; +    '0',
</span><br>
<span class="quotelev1">&gt; +    '0',
</span><br>
<span class="quotelev1">&gt; +    '0',
</span><br>
<span class="quotelev1">&gt; +    '0',
</span><br>
<span class="quotelev1">&gt; +    '0',
</span><br>
<span class="quotelev1">&gt; +    '0',
</span><br>
<span class="quotelev1">&gt; +    '0',
</span><br>
<span class="quotelev1">&gt; +    '0',
</span><br>
<span class="quotelev1">&gt; +    '0'
</span><br>
<span class="quotelev1">&gt; +   );
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  -- Latency/Bandwidth Table
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/server/sql/v3/stats/collect-stats.pl
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/server/sql/v3/stats/collect-stats.pl	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/server/sql/v3/stats/collect-stats.pl	2007-09-19 09:42:36 EDT (Wed, 19 Sep 2007)
</span><br>
<span class="quotelev1">&gt; @@ -361,7 +361,8 @@
</span><br>
<span class="quotelev1">&gt;    #
</span><br>
<span class="quotelev1">&gt;    # Render time segments
</span><br>
<span class="quotelev1">&gt;    #
</span><br>
<span class="quotelev1">&gt; -  my $time_24_cycle = &quot; 21:00:00&quot;; # 9 pm
</span><br>
<span class="quotelev1">&gt; +  #my $time_24_cycle = &quot; 21:00:00&quot;; # 9 pm
</span><br>
<span class="quotelev1">&gt; +  my $time_24_cycle = &quot; 23:59:59&quot;; # Midnight
</span><br>
<span class="quotelev1">&gt;    my $epoch = &quot;2006-11-24 &quot; . $time_24_cycle;
</span><br>
<span class="quotelev1">&gt;    ($today, $yesterday)         = get_times_today();
</span><br>
<span class="quotelev1">&gt;    ($days_epoch, $months_epoch) = get_times_epoch($epoch, $today);
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
<li><strong>Next message:</strong> <a href="0112.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1033 (commit to www.open-mpi.org?)"</a>
<li><strong>Previous message:</strong> <a href="0110.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: sun)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0112.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1033 (commit to www.open-mpi.org?)"</a>
<li><strong>Reply:</strong> <a href="0112.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1033 (commit to www.open-mpi.org?)"</a>
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
